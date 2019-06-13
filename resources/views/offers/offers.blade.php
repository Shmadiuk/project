@extends('layouts.main')
@section('content')
    <div class="users-tables-group">
        <div class="table-users-row">
            @foreach( $offering as $item)
            <div class="table-user">
                <div class="table-header-blue clearfix">
                        <span class="right">
                            <a href="" class=" action" style="color: white">{{__('education.offers.Edit')}}</a>

                            <a href="" class="action" style="color: white; padding-left: 20px;">{{__('education.offers.Delete')}}</a>
                        </span>
                </div>
                                <div class="avatar-block">
                                    <img src="img/pop.jpeg" width="30%" height="30%">
                                </div>


                <div class="tale-user-body clearfix">
                    <table class="user-details">
                        <tbody>
                        <tr>
                            <br>
                            <td>{{__('education.offers.Type')}}</td>
                            <td>{{$item->type_object}}</td>
                        </tr>
                        <tr>
                            <td>{{__('education.offers.Cost')}}</td>
                            <td>{{$item->price}}{{$item->type_price}}</td>
                            <td style="font-weight: bold;"></td>
                        </tr>
                        <tr>
                            <td>{{__('education.offers.Type of walls')}}</td>
                            <td>{{$item->type_wall}}</td>
                        </tr>
                        <tr>
                            <td>{{__('education.offers.Room')}}</td>
                            <td>{{$item->number_rooms}}</td>
                        </tr>
                        <tr>
                            <td >{{__('education.offers.Users')}}</td>
                            <td style="">{{$item->user_id}}</td>
                        </tr>
                        <tr>
                            <td>{{__('education.offers.telephone')}}</td>
                            <td>{{$item->phone}}</td>
                        </tr>
                        <tr>
                            <td>{{__('education.offers.Information')}}</td>
                            <td>{{$item->information}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        @endforeach

    </div>
    </div>
@stop