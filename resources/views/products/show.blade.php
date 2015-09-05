<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Productos
        <small>Panel de Control</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="/products">Productos</li>
                    <li class="active">Ver</li>
    </ol>


</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">@{{product.nombre}}</h3>
            <div class="box-tools pull-right">
              <!-- Buttons, labels, and many other things can be placed here! -->
              <!-- Here is a label for example -->
              <button class=" label-default" ng-if="product.hasVariants == '1'" ng-click="addVariant(product.id)">Añadir Variante</button>

              <button class=" label-default">Imprimir Código de Barras</button>
              <button class=" label-default">Editar Producto</button>
              <button class=" label-danger" ng-if="product.quantVar == '0'">Eliminar</button>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class="box-body">
              <div class="row">
                  <div class="col-md-8">
                      <b>Descripción:</b> @{{ product.descripcion }} <br/> <br/>
            ------------------------------------------------------------------------------------------------------------------------------------<br/>
                      <b>Código de Producto</b>: @{{product.codigo}}<br/>
            <b>Marca:</b> @{{ product.brand.nombre }} <br/> <br/>
            <b>Línea:</b> @{{ product.type.nombre }} <br/> <br/>
            <b>Código Único de Producto:</b> @{{ product.codigo }}<br/> <br/>
            <b>Estación:</b> @{{ product.station.nombre }} <br/> <br/>
                      <b>Modelo:</b> @{{ product.modelo }}


                  </div>
                  <div class="col-md-4">

                      <img class="pull-right img-thumbnail" ng-src="@{{product.image}}" alt=""/>
                  </div>
              </div>
            <div class="box">
                            <div class="box-header">
                              <h3 class="box-title">Stock de Variantes</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body no-padding">
                              <table class="table table-striped">
                                <tbody><tr>
                                  <th style="width: 10px">#</th>
                                    <th>Código</th>
                                  <th>SKU</th>
                                  <th>Variante</th>
                                  <th style="">Precio</th>
                                  <th style="">En stock</th>
                                    <th>Editar</th>
                                    <th >Opción</th>
                                    <th >Eliminar</th>
                                </tr>
                                <tr ng-repeat="row in variants">

                                    <td>@{{$index + 1}}</td>
                                    <td>@{{ row.codigo }}</td>
                                    <td>@{{ row.sku }}</td>
                                    <td><a ng-href="/variant/show/@{{row.id}}">@{{row.product.nombre}}
                                            <span ng-repeat="row2 in row.det_atr ">
                                        / @{{row2.descripcion}}
                                    </span>

                                        </a></td>
                                    <td>@{{row.det_pre[0].price}}</td>
                                    <td>@{{row.stock[0].stockActual}}</td>
                                    <td><a ng-click="editUser(row)" class="btn btn-warning btn-xs">Editar</a></td>
                                    <td><a ng-click="" class="btn bg-purple-active color-palette btn-xs">Deshabilitar</a></td>
                                    <td><a ng-click="deleteUser(row)" class="btn btn-danger btn-xs">Eliminar</a></td>
                                </tr>



                              </tbody></table>
                            </div><!-- /.box-body -->
                          </div>

          </div><!-- /.box-body -->
          <div class="box-footer">
            Creado: @{{ product.created_at }}
            <div class="box-tools pull-right">

                          <a href="/products" class="btn btn-default btn-xs">Regresar</a>
            </div>
          </div><!-- box-footer -->
        </div><!-- /.box -->
        </div>
    </div>
</section>