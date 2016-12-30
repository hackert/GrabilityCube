<?php
  
  /* --------------------------------------------------- */
  /* -- Controlador encargado de Envio de push        -- */
  /* -- Alert segun el servicio y conductor asociado  -- */
  /* --------------------------------------------------- */

  public function post_confirm(){
	//	Parametros recibidos
    $id_drive = $request->input('drive_id');
    $id = $request->input('service_id');
    $servicio = Service::find($id);
	if(!empty($servicio)){
			switch ($servicio->status_id) {
				case '6':
					return Response::json(array('error' => ,'2'));
					break;		
				case '1':
				    if(!isset($servicio->drive_id)){
				    	// Actualizando Driver
				    	Driver::update($id_drive,array('available' => ,'0'));
			    		$driveTmp = Driver::find($id_drive);
				    	// Actualizando servicios
				    	Service::update($id,array('drive_id' =>$id_drive,'status_id' =>'2','car_id'=>$driveTmp->car_id));    		
 						// Notificacion al Usuario
 						$pushMessage = 'Tu servicio ha sido confirmado';
 						$push = Push::make();
                        // la variable $servicio aunq no esta actualizada , contiene la informacion que requerimos.
                        if($servicio->user->uuid == ''){ return Response::json(array('error' => '0'));}
                        if ($servicio->user->type == '1') {
                        	//Iphone device
 							$result = $push->ios($servicio->user->uuid,$pushMessage,1,'honk.wav','Open',array('serviceId' => $servicio->id));
                        }else{
                    			$result = $push->android2($servicio->user->uuid,$pushMessage,1,'default','Open',array('serviceId' => $servicio->id));
                        }
				    	return Response::json(array('error' => ,'0'));
				    }												
				default:
					return Response::json(array('error' => ,'1'));
					break;
			}
	}else{ return Response::json() } 
  }
?>