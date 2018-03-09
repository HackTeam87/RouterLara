<section class="content-header">

</section>


<section class="content container-fluid">

    <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header">
                <h3 class="box-title">
                    <small>Input Form</small>
                </h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                            title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <form>

                    <input  type="file" class="form-control btn btn-bitbucket" name="name" placeholder="Введите имя">

                    <select name="category_id" class="form-control ">
                        @foreach($categories as $item)
                            <option value="{{$item->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>

                     <input type="text" class="form-control" name="name" placeholder="Введите имя">

                    <textarea id="editor1" name="editor1" rows="10" cols="50" placeholder="Введите текст">

                    </textarea>

                </form>
            </div>
        </div>
    </div>


    <div class="col-md-6">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Таблица</h3>
                        </div>

                        <div class="box-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Имя</th>
                                    <th>Категория</th>
                                    <th>Изображение</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $item)
                                <tr>
                                    <td>{{$item-name}}</td>
                                    <td></td>
                                </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Rendering engine</th>
                                    <th>Browser</th>
                                    <th>Platform(s)</th>
                                    <th>Engine version</th>
                                    <th>CSS grade</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

</section>