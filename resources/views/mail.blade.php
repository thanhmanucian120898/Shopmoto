{{$hoten}} thân mến,<br>
ShopMoto vừa nhận được đơn hàng của bạn với hình thức thanh toán là "Thanh toán sau khi nhận hàng".Chúng tôi sẽ gửi sản phẩm đến bạn trong vòng 3-4 ngày tới. <br>
Đơn hàng của bạn:<br>
@foreach($sp as $s)
+Tên sản phẩm:
		{{$s['item']['name']}}
	 <br>
+Số lượng:{{$s['qty']}} <br>
	@endforeach
	+Tổng tiền: {{number_format($tonghoadon)}}<br>
	+Địa chỉ: {{$diachi}}<br>
Vui lòng liên hệ với chúng tôi khi đơn hàng của bạn có vấn đề thông qua:<br>
+SDT:0798008925<br>
+Email:shopmoto128@gmail.com