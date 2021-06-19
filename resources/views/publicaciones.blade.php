@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        
                    @endif
                    <div class="col-auto text-center">
                        <div class="card">
                        <button onclick="myFunction()" type="button" class="btn btn-primary">Crear Publicacion</button>
                       
                            <div id="myDIV" style="border:1px solid black;">
                            <div class="container contact-form">
            <div class="contact-image">
                
            </div>
            <form action="/publicaciones" method="post" enctype="multipart/form-data">
            
            @csrf
                <br>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Titulo de la publicacion *" value="" />
                            <span>{{$errors->first('txtName')}}</span>
                        </div>
                        <input type="hidden" name="fecha" value="<?php date_default_timezone_set('America/Lima');  echo date('d-m-Y');?>">
                        <input type="hidden" name="hora" value="<?php  echo date('H:i');?>">
                        <div><input type="file" id="file" class="" name="img"></div>
                        <br>                        
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Publicar" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Agregar contenido *" style="width: 100%; height: 150px;"></textarea>
                            <span>{{$errors->first('txtMsg')}}</span>
                        </div>
                    </div>
                </div>
            </form>
</div>
                            </div>
                            @if(!empty($mensaje))
                                <div class='contenido_hidden'>
                                    <label class="aviso_pub">
                                        <span  class="error_span" style="color: #84a501; font-size: 20px;">{{$mensaje}}</span>
                                    </label>
                                </div>
                            @endif
                            
                        @foreach($dpubli as $dpub)
                        <div id="myDIV" style="border:1px solid black;">
                        <div class="container contact-form">
                        

                          <div class="column">
                                        <h3>{{$dpub['titulo_p']}}</h3>
                                        <img src="xd.png" alt="" class="profile"> </div>
                                        <div class="column">
                                        
                            </div>
                                                    <div class="image">
                                                      <img src="{{asset("storage/".$dpub['img_publi'])}}"  width="200" alt="" style="border: 0;width: 100%;max-width: 200px;height: auto;" class="center-on-narrow">
                                                    </div>
                      
                          <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="max-width:660px;">
                                          <tr>
                                            <td align="center" valign="top" style="font-size:0; padding: 10px 0;">
                                              
                                              <div style="display:inline-block; margin: 0 -2px; max-width:33.33%; min-width:160px; vertical-align:top; width:100%;" class="stack-column">
                                                    
                                              </div>
                                              
                                              
                                              
                                              <div style="display:inline-block; margin: 0 -2px; max-width:66.66%; min-width:320px; vertical-align:top;" class="stack-column">
                                                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                  <tr>
                                                    <td dir="ltr" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 10px 10px 0; text-align: left;" 
                                                    class="center-on-narrow"><strong style="color:#111111;">{{$dpub['descripcion_p']}}</strong> <br>
                                                      
                                                      <br>
                                                      
                                                      
                                                      
                                                      <table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="float:left;">
                                                        <tr>
                                                          <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td"><a href="" style="background: #222222; border: 15px solid #222222; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a"> 
                                                            Guardar
                                                            </a></td>
                                                        </tr>
                                                      </table>
                                                      
                                                      </td>
                                                  </tr>
                                                </table>
                                              </div>
                                              
                                              </td>
                                          </tr>
                          </table>

                          </div>
                         
                         </div>    
                        @endforeach  

                                           
                        </div> 
                </div>
                                
            </div>            
        </div>
    </div>
</div>
@endsection