<?php

require_once "./model/LoginModel.php";

//login & signin classe
class Login{

	//index login
	function index()
	{
		require __DIR__."/../view/home.php";
	}

	function selectRef(){

		$data = json_decode(file_get_contents("php://input"));

		$ref=new LoginModel();

		if(!empty($data->reference))
		{
			$ref->reference=$data->reference;

			$value=$ref->select($ref->reference);

			if($value)
			{
			// Ici la création a fonctionné
			// On envoie un code 201
			http_response_code(201);
			echo json_encode(["message" => "ref  a été effectué".$value]);
			}else
			{
				// Ici la création n'a pas fonctionné
				// On envoie un code 503
				http_response_code(503);
				echo json_encode(["message" => "ref n'a pas été effectué".$value]);         
			}
		}else
		{
			// On gère l'erreur
			http_response_code(405);
			echo json_encode(["message" => "La méthode n'est pas autorisée"]);
		}

	}

	//insert
	function add()
	{
		// On récupère les informations envoyées
		$data = json_decode(file_get_contents("php://input"));

		// session_start();
		// $sign=new LoginModel();
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$result = '';
		for ($i = 0; $i < 5; $i++)
		$result .= $characters[mt_rand(0, 61)];

		$rdv=new LoginModel();

		if(!empty($data->reference.$result) && !empty($data->nom) && !empty($data->prenom) && !empty($data->email) && !empty($data->tele) && !empty($data->age) && !empty($data->message))
		{
			
			// $rdv->reference.$result=$data->reference.$result;
			$rdv->reference=$data->reference;
			$rdv->nom=$data->nom;
			$rdv->prenom=$data->prenom;
			$rdv->email=$data->email;
			$rdv->tele=$data->tele;
			$rdv->age=$data->age;
			$rdv->message=$data->message;

			$value=$rdv->insert($rdv->reference.$result,$rdv->nom,$rdv->prenom,$rdv->email,$rdv->tele,$rdv->age,$rdv->message);

			if($value)
			{
			// Ici la création a fonctionné
			// On envoie un code 201
			http_response_code(201);
			echo json_encode(["message" => "L'ajout a été effectué".$value]);
			}else
			{
				// Ici la création n'a pas fonctionné
				// On envoie un code 503
				http_response_code(503);
				echo json_encode(["message" => "L'ajout n'a pas été effectué".$value]);         
			}
		}else
		{
			// On gère l'erreur
			http_response_code(405);
			echo json_encode(["message" => "La méthode n'est pas autorisée"]);
		}
	}
}

