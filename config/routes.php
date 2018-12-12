<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "status" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "front",
      "firstpage"
    ],
    "home" => [
      "front",
      "showUser",
      "status" => "user"
    ],
    "addUser" => [
      "front",
      "showAddUser"

    ],
    "logout" => [
      "front",
      "logoutUser"
    ],
    "single" => [
      "front",
      "showsingle",
      ["id" => ["integer"],
    ],
      "status" => "user"
    ],
    "deleteUser" => [
      "front",
      "eraser",
      ["id" => ["integer"]
    ]
    ],
    "updateUser" => [
      "front",
      "showUpdate",
        ["id" => ["integer"]
  ]
]
  ];
}

 ?>
