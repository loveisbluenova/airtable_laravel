@extends('admin.layouts.dashboard')

@section('template_title')
  Welcome {{ $user->name }}
@endsection

@section('template_fastload_css')
@endsection

@section('content')
   <div class="content-wrapper">
      <section class="content-header">

      <h1>
        Ny - Projects <small> {{ Lang::get('pages.dashboard-access-level',['access' => $access] ) }} </small>
      </h1>

      {!! Breadcrumbs::render() !!}

      </section>
    <section class="content">
      <div class="row">
        
          <div class="col-sm-4 col-md-4">
                <div class="input-group col-md-12">

                    <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search (Project ID or Description)" name="q">
                    <div class="input-group-btn">
                      <button class="btn btn-secondary" id="mysearchbutton" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>  
                </div>
          </div>
        <!--  <div class="form-group col-sm-4 col-md-4">
            <select id="first-disabled2" class="selectpicker" multiple data-hide-disabled="true" data-size="5">
              <option></option>
            </select>
          </div> -->    
        
      </div> 

      <div class="row">
        <div class="col-xs-12">

          <!-- /.box -->

          <div class="box">
            <div class="box-header">

              <div class="box box-solid">

                <div class="box-body">
                  <dl class="dl-horizontal" id="row">

                  </dl>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Project ID</th>
                  <th>Agency</th>
                  <th>Description</th>
                  <th>#commitments</th>
                  <th>Total Cost</th>
                </tr>
                </thead>
                <tbody id="tblData">
                <tr>

                </tr>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
@endsection

@section('template_scripts')

    @include('admin.structure.dashboard-scripts')
    <script src="../js/airtable.browser.js"></script>
    <script src="../js/project.js"></script>

@endsection