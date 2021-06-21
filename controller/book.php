<?php

require_once "./model/BookModel.php";
session_start();


class Book
{
	//select
	function index()
	{
		// header('Content-Type: application/json');
		$objet= new BookModel();
		$data = json_decode(file_get_contents("php://input"));
		// $user= array();
		// die(print_r($data));
		$res = $objet->select($data->reference)->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($res);
	}

	//select horaire
	function selectHoraire()
	{
		// header('Content-Type: application/json');
		$objet= new BookModel();
		$data = json_decode(file_get_contents("php://input"));
		// die(print_r($data));
		// $user= array();
		$res = $objet->selectDate($data->date)->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode($res);
	}

	//insert
	function add()
	{
		// On récupère les informations envoyées
    	$data = json_decode(file_get_contents("php://input"));

    	$rdv=new BookModel();

		// if(!empty($data->date) && !empty($data->heure) && !empty($data->message) && !empty($data->reference_user))
		// {
			$rdv->date = $data->date;
			$rdv->heure=$data->heure;
			$rdv->message=$data->message;
			$rdv->reference_user=$data->reference_user;

			$rdv->insert($rdv->date,$rdv->heure,$rdv->message,$rdv->reference_user);

		// 	if($value)
		// 	{
        //     // Ici la création a fonctionné
        //     // On envoie un code 201
        //     http_response_code(201);
        //     echo json_encode(["message" => "L'ajout a été effectué".$value]);
	    //     }else
	    //     {
	    //         // Ici la création n'a pas fonctionné
	    //         // On envoie un code 503
	    //         http_response_code(503);
	    //         echo json_encode(["message" => "L'ajout n'a pas été effectué".$value]);         
	    //     }
		// }else
		// {
		// 	// On gère l'erreur
		//     http_response_code(405);
		//     echo json_encode(["message" => "La méthode n'est pas autorisée"]);
		// }
	}



	//edit 
	function edit(){
		
		// On récupère les informations envoyées
		$data = json_decode(file_get_contents("php://input"));

		$rdv=new BookModel();

		if(!empty($data->id))
		{
			$rdv->id=$data->id;

			$value=$rdv->edit($rdv->id);

			if($value)
			{
			// Ici la création a fonctionné
			// On envoie un code 201
			http_response_code(201);
			echo json_encode(["message" => "edit a été effectué".$value]);
			}else
			{
				// Ici la création n'a pas fonctionné
				// On envoie un code 503
				http_response_code(503);
				echo json_encode(["message" => "edit n'a pas été effectué".$value]);         
			}
		}else
		{
			// On gère l'erreur
			http_response_code(405);
			echo json_encode(["message" => "La méthode n'est pas autorisée"]);
		}
	}

	//update
	function update()
	{
		// On récupère les informations envoyées
		$data = json_decode(file_get_contents("php://input"));

		$rdv=new BookModel();

		if(!empty($data->id) && !empty($data->date) && !empty($data->heure) && !empty($data->message) && !empty($data->reference_user))
		{
			$rdv->id = $data->id;
			$rdv->date=$data->date;
			$rdv->heure=$data->heure;
			$rdv->message=$data->message;
			$rdv->reference_user=$data->reference_user;

			$value=$rdv->update($rdv->id,$rdv->date,$rdv->heure,$rdv->message,$rdv->reference_user);

			if($value)
			{
			// Ici la création a fonctionné
			// On envoie un code 201
			http_response_code(201);
			echo json_encode(["message" => "update a été effectué".$value]);
			}else
			{
				// Ici la création n'a pas fonctionné
				// On envoie un code 503
				http_response_code(503);
				echo json_encode(["message" => "update n'a pas été effectué".$value]);         
			}
		}else
		{
			// On gère l'erreur
			http_response_code(405);
			echo json_encode(["message" => "La méthode n'est pas autorisée"]);
		}

	}	

	//delete
	function delete()
	{header("Access-Control-Allow-Origin: *");
		// On récupère les informations envoyées
    	$data = json_decode(file_get_contents("php://input"));
		
    	$rdv=new BookModel();

		if(!empty($data->id))
		{
			$rdv->id = $data->id;
			$value=$rdv->delete($rdv->id);
			// print_r($value);
			// die($value);

			if($value)
			{
            // Ici la création a fonctionné
            // On envoie un code 201
            http_response_code(201);
            echo json_encode(["message" => "suppression  a été effectué".$value]);
	        }else
	        {
	            // Ici la création n'a pas fonctionné
	            // On envoie un code 503
	            http_response_code(503);
	            echo json_encode(["message" => "suppression n'a pas été effectué".$value]);         
	        }
		}else
		{
			// On gère l'erreur
		    http_response_code(405);
		    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
		}
	}
}