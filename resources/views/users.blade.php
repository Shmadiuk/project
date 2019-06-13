@extends('layouts.main')
@section('content')
    <div class="users-tables-group">
        <div class="table-users-row">
            <div class="table-user">
                @foreach($users as $user)
                    <div class="table-header-blue clearfix">
                        <span class="right">
                            <a href="" class=" action" style="color: white">{{__('offers.Edit')}}</a>

                            <a href="" class="action" style="color: white; padding-left: 20px;">{{__('Delete')}}</a>
                        </span>
                    </div>
                    <div class="tale-user-body clearfix">
                        <table class="user-details">
                            <tbody>
                            <tr>
                                <td>{{__('education.name user')}}</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>{{__('education.email user')}}</td>
                                <td>{{$user->email}}</td>
                                <td style="font-weight: bold;"></td>
                            </tr>
                            <tr>
                                <td>{{__('education.number phone')}}</td>
                                <td>{{$user->phone}}</td>
                            </tr>
                            </tbody>
                        </table>
                        @endforeach
                    </div>
            </div>
        </div>

    </div>
    </div>
@stop