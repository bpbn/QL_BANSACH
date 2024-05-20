@extends('layouts.app')

@section('title', 'Trang chủ')

@section('navbar')
    @parent

    <form method="POST" action="{{ route('invoice.store') }}">
        @csrf
        <div class="container invoice mt-5">
            <div class="row ">
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3" style="margin-top: 20px;">Địa chỉ thanh toán</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Họ</label>
                                <input type="text" name="firstName" class="form-control" id="firstName" placeholder value
                                    required>


                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Tên</label>
                                <input type="text" name="user_firstName" class="form-control" id="lastName" placeholder
                                    value required>

                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="username">Tên tài khoản(*) </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" name="name" class="form-control" id="username"
                                    placeholder="Tên tài khoản!" required>
                                <div class="invalid-feedback" style="width: 100%;">
                                    Your username is required.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email(*) <span class="text-muted"></span></label>
                            <input type="email" name="user_email" class="form-control" id="email"
                                placeholder=" Vui lòng nhập email! ">
                            <div class="invalid-feedback">
                                Please enter a valid email address shipping updates.
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <select class="form-select" id="provinceSelect" name="provinceSelect"
                                    aria-label=".form-select-lg example">
                                    <option selected>-- Chọn Tỉnh/Thành phố --</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" id="districtSelect" name="districtSelect"
                                    aria-label=".form-select-lg example">
                                    <option selected>-- Chọn Quận/Huyện --</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" id="wardSelect" name="wardSelect"
                                    aria-label=".form-select-lg example">
                                    <option selected>-- Chọn Phường/Xã --</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">Địa chỉ nhà(*)</label>
                            <input type="text" name="ShippingAddress" class="form-control" id="address"
                                placeholder="Vui lòng nhập địa chỉ!" required>
                            <div class="invalid-feedback">
                                Please enter your shipping address.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone">Số điện thoại(*) <span class="text-muted"></span></label>
                            <input type="text" name="ShippingPhone" class="form-control" id="phone"
                                placeholder="---">
                        </div>
                        <a class="mb-3">Tổng tiền: {{ number_format($total, 0, ',', '.') }}VNĐ</a>

                        <hr class="mb-4">
                        <h4 class="mb-3">Thanh toán</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="invoiceMethod" type="radio" class="custom-control-input"
                                    checked required>
                                <label class="custom-control-label" for="credit">Thanh toán khi nhận hàng</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="invoiceMethod" type="radio" class="custom-control-input"
                                    required>
                                <label class="custom-control-label" for="debit">Thanh toán qua ngân hàng</label>
                            </div>

                        </div>
                        <hr class="mb-4">
                        <button onclick="handleAddToInvoice(event)" class="btn btn-primary btn-lg btn-block mb-2"
                            type="submit">Tiếp tục thanh
                            toán</button>
                        <input type="hidden" name="addressSelect" id="addressSelect">
                    </form>
                </div>
            </div>
        </div>
    </form>
    <script>
        let provinceSelect = document.getElementById('provinceSelect');
        let districtSelect = document.getElementById('districtSelect');
        let wardSelect = document.getElementById('wardSelect');
        let provinceActive;
        let districtActive;
        let wardActive;
        async function getALLProvinces() {
            let provinces = [];
            await fetch('https://vnprovinces.pythonanywhere.com/api/provinces/?basic=true&limit=100')
                .then(res => res.json())
                .then(data => {
                    provinces = data.results;
                })
                .catch(err => console.console.error(err));
            return provinces;
        }
        async function getALLDistricts(provinceId) {
            let districts = [];
            await fetch(
                    `https://vnprovinces.pythonanywhere.com/api/districts/?province_id=${provinceId}&basic=true&limit=100`
                )
                .then(res => res.json())
                .then(data => {
                    districts = data.results;
                })
                .catch(err => console.console.error(err));
            return districts;
        }
        async function getALLWards(districtId) {
            let wards = [];
            await fetch(
                    `https://vnprovinces.pythonanywhere.com/api/wards/?district_id=${districtId}&basic=true&limit=100`)
                .then(res => res.json())
                .then(data => {
                    wards = data.results;
                })
                .catch(err => console.console.error(err));
            return wards;
        }
        async function loadDataProvinces() {
            let provinces = await getALLProvinces();
            let optionsHTML = '';
            provinces?.forEach((item, index) => {
                if (index === 0) {
                    provinceActive = item.id
                    optionsHTML += `<option selected value="${item.id}">${item.name}</option>`;
                } else {
                    optionsHTML += `<option value="${item.id}">${item.name}</option>`;
                }
            })
            provinceSelect.innerHTML = optionsHTML;
            await loadDataDistricts(provinceActive);
            loadDataWards(districtActive);
        }
        async function loadDataDistricts(provinceId) {
            let districts = await getALLDistricts(provinceId);
            let optionsHTML = '';
            districts?.forEach((item, index) => {
                if (index === 0) {
                    districtActive = item.id;
                    optionsHTML += `<option selected value="${item.id}">${item.full_name}</option>`;
                } else {
                    optionsHTML += `<option value="${item.id}">${item.full_name}</option>`;
                }
            })
            districtSelect.innerHTML = optionsHTML;
        }
        async function loadDataWards(districtId) {
            let wards = await getALLWards(districtId);
            let optionsHTML = '';
            wards?.forEach((item, index) => {
                if (index === 0) {
                    optionsHTML += `<option selected value="${item.id}">${item.full_name}</option>`;
                } else {
                    optionsHTML += `<option value="${item.id}">${item.full_name}</option>`;
                }
            })
            wardSelect.innerHTML = optionsHTML;
            AddressSelectString();
        }
        loadDataProvinces();
        provinceSelect.onchange = function() {
            handleProvinceChange();
        };
        districtSelect.onchange = function() {
            handleDistrictChange();
        };
        wardSelect.onchange = function() {
            handleWardChange();
        };

        async function handleProvinceChange() {
            let selectedOption = provinceSelect.options[provinceSelect.selectedIndex];
            provinceActive = selectedOption.value;
            await loadDataDistricts(provinceActive);
            loadDataWards(districtActive);
            AddressSelectString()
        }

        async function handleDistrictChange() {
            let selectedOption = districtSelect.options[districtSelect.selectedIndex];
            districtActive = selectedOption.value;
            await loadDataWards(districtActive);
            AddressSelectString()
        }

        function handleWardChange() {
            let selectedOption = wardSelect.options[wardSelect.selectedIndex];
            wardActive = selectedOption.value;
            AddressSelectString()
        }

        function AddressSelectString() {
            let selectedOptionProvince = provinceSelect.options[provinceSelect.selectedIndex];
            let selectedOptionDistrict = districtSelect.options[districtSelect.selectedIndex];
            let selectedOptionWard = wardSelect.options[wardSelect.selectedIndex];
            let selectedOptionText = selectedOptionWard.text + ', ' + selectedOptionDistrict.text + ', ' + selectedOptionProvince.text;
            document.getElementById('addressSelect').value = selectedOptionText;
        }
    </script>
    <script>
        function handleAddToInvoice(event) {


            event.preventDefault();
            // Kiểm tra thông tin
            let firstName = document.getElementById('firstName').value;
            let lastName = document.getElementById('lastName').value;
            let username = document.getElementById('username').value;
            let email = document.getElementById('email').value;
            let address = document.getElementById('address').value;

            if (firstName === '' || lastName === '' || username === '' || email === '' || address === '') {
                // Nếu thông tin chưa đầy đủ, hiển thị thông báo lỗi
                Swal.fire({
                    position: 'top',
                    icon: 'error',
                    title: 'Vui lòng nhập đầy đủ thông tin !',
                    showConfirmButton: false,
                    timer: 2000
                });
            } else {
                // Nếu thông tin đã đầy đủ, tiếp tục thanh toán và hiển thị thông báo thành công
                Swal.fire({
                    position: 'top',
                    icon: 'success',
                    title: 'Đặt hàng thành công',
                    showConfirmButton: false,
                    timer: 5000
                });
                event.target.closest('form').submit(); // Gửi biểu mẫu
            }

        }
    </script>
@endsection
