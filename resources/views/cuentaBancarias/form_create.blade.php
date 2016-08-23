<section class="content-header">
          <h1>
            Cuentas Bancarias
            <small>Panel de Control</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class=""><a href="/cuentaBancarias">Cuentas Bancarias</a></li>
            <li class="active">Crear</li>
          </ol>

          
        </section>

        <section class="content">
        <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Agregar Cuenta Bancaria</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="cuentaBancariaCreateForm" role="form" novalidate>
                  <div class="box-body">
                  <div class="callout callout-danger" ng-show="errors"> 
                                                  <ul>
                                              <li ng-repeat="row in errors track by $index"><strong >@{{row}}</strong></li>
                                              </ul>
                                            </div>
                    
                   <div class="form-group" ng-class="{true: 'has-error'}[ cuentaBancariaCreateForm.numeroCuenta.$error.required && cuentaBancariaCreateForm.$submitted || cuentaBancariaCreateForm.z.$dirty && cuentaBancariaCreateForm.numeroCuenta.$invalid]">
                      <label for="numeroCuenta">Numero de Cuenta </label>
                      <input type="text" class="form-control" name="numeroCuenta" ng-blur="validanomUbigeo(cuentaBancaria.numeroCuenta)" placeholder=" Numero de Cuenta" ng-model="cuentaBancaria.numeroCuenta" required>
                      <label ng-show="cuentaBancariaCreateForm.$submitted || cuentaBancariaCreateForm.numeroCuenta.$dirty && cuentaBancariaCreateForm.numeroCuenta.$invalid">
                        <span ng-show="cuentaBancariaCreateForm.numeroCuenta.$error.required"><i class="fa fa-times-circle-o"></i>Requerido.</span>
                      </label>
                    </div>

                    <div>
                        <label>Banco</label>
                        <select class="form-control ng-pristine ng-valid ng-touched" name="" ng-model="cuentaBancaria.banco_id" ng-options="item.id as item.nombre for item in bancos"><option value="">-- Elige Banco --</option></select>
                    </div>

                    

                </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" ng-click="createCuentaBancaria()">Crear</button>
                    <a href="/cuentaBancarias" class="btn btn-danger">Cancelar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              </div>
              </div><!-- /.row -->
              </section><!-- /.content -->