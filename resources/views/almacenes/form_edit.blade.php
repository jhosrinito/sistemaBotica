        <section class="content-header">
          <h1>
            Editar Almacen
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class=""><a href="/almacenes">Almacenes</a></li>
            <li class="active">Editar</li>
          </ol>  
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Editar Almacen</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="almacenEditForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors">
                    <ul>
                     <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                    </ul>
                   </div>
                                            
                <div class="row">
                  <ul>
                    <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                  </ul>
                 </div>
                  
                <div class="row">                        
                <div class="col-md-4"> 
                   <div class="form-group" ng-class="{true: 'has-error'}[ almacenEditForm.nombreAlmacen.$error.required && almacenEditForm.$submitted || almacenEditForm.nombreAlmacen.$dirty && almacenEditForm.nombreAlmacen.$invalid]">
                      <label for="nombreAlmacen">Nombre Almacen</label>
                      <input type="text" class="form-control" name="nombreAlmacen" placeholder="Nombre Almacen" ng-model="almacen.nombreAlmacen" required>
                      <label ng-show="almacenEditForm.$submitted || almacenEditForm.nombreAlmacen.$dirty && almacenEditForm.nombreAlmacen.$invalid">
                        <span ng-show="almacenEditForm.nombreAlmacen.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                  </div>

                  <div class="col-md-4"> 
                   <div class="form-group" ng-class="{true: 'has-error'}[ almacenEditForm.descripcion.$error.required && almacenEditForm.$submitted || almacenEditForm.descripcion.$dirty && almacenEditForm.descripcion.$invalid]">
                      <label for="descripcion">Descripción</label>
                      <input type="text" class="form-control" name="descripcion" placeholder=" descripcion" ng-model="almacen.descripcion" required>
                      <label ng-show="almacenEditForm.$submitted || almacenEditForm.descripcion.$dirty && almacenEditForm.descripcion.$invalid">
                        <span ng-show="almacenEditForm.descripcion.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>
                    </div> 

                    <div class="col-md-4"> 

                     <div class="form-group" ng-class="{'has-error': almacenEditForm.tienda_id.$invalid,'has-success':almacenEditForm.tienda_id.$invalid}">
                            <label>Farmacia</label>
                            <select class="form-control ng-pristine ng-valid ng-touched" name="tienda_id" ng-model="almacen.tienda_id" ng-options="item.id as item.nombreTienda for item in tiendas" required><option value="">-- Elige Farmacia --</option></select>
                            <label ng-show="almacenEditForm.tienda_id.$error.required">
                                <span ng-show="almacenEditForm.tienda_id.$error.required"><i class="fa fa-times-circle-o"></i>El campo Farmacia es Requerido. 
                                </span>
                              </label>
                        </div>

                        </div>
                        </div>


                </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" ng-click="updateAlmacen()">Guardar</button>
                    <a href="/almacenes" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!--
