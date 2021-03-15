@extends('layouts.backend')

@section('content')

  @include('backend.components.sidebar')

    <div class="content">
      @include('backend.components.header')
      <div class="content-header">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="">Home</a></li>      
              <li class="breadcrumb-item active" aria-current="page">Products Category List</li>
            </ol>
          </nav>
          <h4 class="content-title content-title-xs">Products Category List</h4>
        </div>
      </div><!-- content-header -->  
      <div class="content-body">
        <div class="component no-code">
          <div class="card">
            <div class="card-body">       
              <div class="component">
                <a href="product_create.php">
                  <button class="btn btn-primary"><i data-feather="plus"></i> Add New</button>
                </a><br><br>   
                <div class="table table-responsive">
                  <table id="example1" class="table">
                    <thead>
                      <tr>
                        <th class="wd-5p">No</th>
                        <th class="wd-20p">Code</th>                
                        <th class="wd-20p">Name</th>
                        <th class="wd-25p">Status</th>
                        <th class="wd-10p">Actions</th>                                                        
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>P000234</td>                  
                          <td>Pasta Gigi Pepsodent</td>
                          <td>Active</td> 
                          <td>
                            <a href=""><i class="fa fa-eye"></i></a> 
                            <a href=""><i class="fa fa-edit" style="margin-left: 8px"></i></a> 
                            <a href="#modal1" data-toggle="modal"><i class="fa fa-trash" style="margin-left: 8px"></i></a>
                          </td>                  
                        </tr>     
                        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalLabel">Konfirmasi Delete</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true"><i data-feather="x"></i></span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p class="mg-b-0">Are you sure want to delete this record? </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary rounded-5" data-dismiss="modal">Cancel</button>
                                <a href=""><button type="button" class="btn btn-dark rounded-5">Delete</button></a>
                              </div>
                            </div>
                          </div>
                        </div>                               
                    </tbody>
                  </table>
                </div>
              </div><!-- component-section -->
            </div>
          </div>
        </div>
      </div><!-- content-body -->
    </div>

@endsection    