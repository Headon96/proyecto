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
                        
                            <div id="myDIV" style="border:1px solid black;">
                            <div class="container contact-form">
            <div class="contact-image">
                
            </div>
            <h3>PUBLICACIONES GUARDADAS</h3>
</div>
                            </div>
                            @if(!empty($mensaje))
                                <div class='contenido_hidden'>
                                    <label class="aviso_pub">
                                        <span  class="error_span" style="color: #84a501; font-size: 20px;">{{$mensaje}}</span>
                                    </label>
                                </div>
                            @endif
                            
                        @foreach($dguardado as $dpub)
                            @foreach($datosUser as $user)
                            @if($dpub["f_id_g"]==$user["id"])
                                            <div id="myDIV" style="border:1px solid black;">
                                        <div class="container contact-form">
                                        

                                        <div class="column">
                                                        <h3>{{$dpub['titulo_g']}}</h3>
                                                        <img src="xd.png" alt="" class="profile"> </div>
                                                        <div class="column">
                                                        
                                            </div>
                                                                    <div class="image">
                                                                    <img src="{{asset("storage/".$dpub['img_g'])}}"  width="200" alt="" style="border: 0;width: 100%;max-width: 200px;height: auto;" class="center-on-narrow">
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
                                                                    class="center-on-narrow"><strong style="color:#111111;">{{$dpub['descripcion_g']}}</strong> <br>
                                                                    
                                                                    <br>
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    </td>
                                                                </tr>
                                                                </table>
                                                            </div>
                                                            
                                                            </td>
                                                        </tr>
                                        </table>

                                        </div>
                                        
                                        </div> 
                            @endif
                            @endforeach
                           
                        @endforeach  

                                           
                        </div> 
                </div>
                                
            </div>            
        </div>
    </div>
</div>
@endsection