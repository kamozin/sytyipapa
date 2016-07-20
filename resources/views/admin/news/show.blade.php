@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Категории</div>

                    <div class="panel-body">
                        <a href="/admin/news/store" class="btn btn-primary">Добавить новость</a>
                    </div>
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade in" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <strong>{{session()->get('success')}}</strong>
                        </div>
                    @endif
                    <div class="panel-body">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                               cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>№ п/п</th>
                                <th>Наименование новости</th>
                                <th>Описание новости</th>
                                <th>Ключевые слова новости</th>
                                <th>Заголовок новости</th>
                                <th>Редактировать новость</th>
                                <th>Обновить фото новости</th>
                                <th>Удалить новость</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $n)
                                <tr>
                                    <td>{{$n->id}}</td>
                                    <td>
                                        {{$n->name}}
                                    </td>
                                    <td>{{$n->description}}</td>
                                    <td>{{$n->keywords}}</td>
                                    <td>{{$n->title}}</td>
                                    <td><a href="/admin/news/edit/{{$n->id}}">Редактировать</a></td>
                                    <td><a href="/admin/news/photo/{{$n->id}}">Обновить фото новости</a></td>
                                    <td><a href="/admin/news/destroy/{{$n->id}}">Удалить</a></td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('header')

    <link href="/includes/admin/js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

@stop
@section('footer')
    <script src="/includes/admin/js/datatables/jquery.dataTables.min.js"></script>
    <script>

        $('#datatable-responsive').DataTable({

            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Russian.json"
            }
        });
    </script>
@stop