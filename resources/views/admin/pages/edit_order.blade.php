@extends('admin.pages.master')
@section('title','Đơn hàng')
@section('main')
<div id="main-content-wp" class="list-product-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Đơn hàng</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        @include('admin.pages.sidebar')
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                        <ul class="post-status fl-left">
                            <li class="all"><a href="">Tất cả <span class="count">(69)</span></a> |</li>
                            <li class="publish"><a href="">Đã đăng <span class="count">(51)</span></a> |</li>
                            <li class="pending"><a href="">Chờ xét duyệt<span class="count">(0)</span></a></li>
                            <li class="pending"><a href="">Thùng rác<span class="count">(0)</span></a></li>
                        </ul>
                        <form method="GET" class="form-s fl-right">
                            <input type="text" name="s" id="s">
                            <input type="submit" name="sm_s" value="Tìm kiếm">
                        </form>
                    </div>
                    <div class="actions">
                        <form method="GET" action="" class="form-actions">
                            <select name="actions">
                                <option value="0">Tác vụ</option>
                                <option value="1">Công khai</option>
                                <option value="1">Chờ duyệt</option>
                                <option value="2">Bỏ vào thủng rác</option>
                            </select>
                            <input type="submit" name="sm_action" value="Áp dụng">
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                    <td><span class="thead-text">Mã đơn hàng</span></td>
                                    <td><span class="thead-text">Họ và tên</span></td>
                                    <td><span class="thead-text">Tổng giá</span></td>
                                    <td><span class="thead-text">Trạng thái</span></td>
                                    <td><span class="thead-text">Tên SP</span></td>
                                    <td><span class="thead-text">Số lượng</span></td>
                                    <td><span class="thead-text">Giá</span></td>
                                    <td><span class="thead-text">Thời gian</span></td>
                                    <td><span class="thead-text">Action</span></td>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                    <td><span class="tbody-text">{{$order->ord_id}}</h3></span>
                                    <input type="hidden" value="{{$order->ord_id}}" id="ord_id">
                                    <td><span class="tbody-text">{{$order->ord_name}}</h3></span>
                                    <td>
                                        <div class="tb-title fl-left">
                                            <a href="" title="">{{$order->ord_total_price}}</a>
                                        </div>
                                    </td>
                                    <td>
                                        <select name="status" id="status">
                                            <option value="Chờ duyệt" @if($order->ord_status=='Chờ duyệt') selected @endif>Chờ duyệt</option>
                                            <option value="Đã xác nhận" @if($order->ord_status=='Đã xác nhận') selected @endif>Đã xác nhận</option>
                                            <option value="Đang giao" @if($order->ord_status=='Đang giao') selected @endif>Đang giao</option>
                                        </select>
                                    </td>
                                    @foreach($order_detail as $ordt)
                                    <td><span class="tbody-text">{{$ordt->ordt_product_id}}</span></td>
                                    <td><span class="tbody-text">{{$ordt->ordt_numbers}}</span></td>
                                    <td><span class="tbody-text">{{$ordt->ordt_price}}</span></td>
                                    <td><span class="tbody-text">{{$ordt->created_at}}</span></td>
                                    @endforeach
                                    <td>
                                         <ul class="list-operation">
                                            <li><a  id="btn-luu" title="Lưu" class="edit"><i class="fas fa-save"></i></a>
                                            </li>
                                            <li><a href="admin/order" title="Hủy" class="delete"><i class="fas fa-window-close"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
$('#btn-luu').click(function(event) {
   var status = $('#status').val();
   var ord_id = $('#ord_id').val();
   var _token = $('#token').val();
   $.ajax({
       url: 'admin/order/edit',
       type: 'POST',
       dataType: 'JSON',
       data: {
        ord_id: ord_id,
        status: status,
        _token: _token
    },
   })
   .done(function() {
       console.log("success");
   })
   .fail(function() {
       console.log("error");
   })
   .always(function() {
       console.log("complete");
      location.replace("/admin/order");
   });
   
});
</script>
@endsection