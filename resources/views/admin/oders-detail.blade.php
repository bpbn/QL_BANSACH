<!DOCTYPE html>
<html>
<head>
    <title>Invoice Details</title>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 300px;
            text-align: center;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Invoice Details</h1>

<p>Mã hoá đơn: {{ $invoice->id }}</p>
<p>Khách hàng: {{ $invoice->user->name }}</p>
<p>Chi tiết đơn:</p>
<ul>
    @foreach ($invoice->invoiceDetails as $detail)
        <li>
            Tên sách: {{ $detail->book->name }} <br>
            Số lượng: {{ $detail->quantity }}
        </li>
    @endforeach
</ul>

<button id="myBtn">Show QR Code</button>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    {!! $qrCode !!}
  </div>
</div>

<script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
      modal.style.display = "block";
    }

    span.onclick = function() {
      modal.style.display = "none";
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>

</body>
</html>
