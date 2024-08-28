<?php
class EleveModel {
    // Les propriétés de l'élève, par exemple :
    public $id;
    public $nom;
    public $age;
    public $classe;

    public function __construct($data) {
        // Initialisation des propriétés de l'élève
        $this->nom = $data['nom'] ?? null;
        $this->age = $data['age'] ?? null;
        $this->classe = $data['classe'] ?? null;
    }

    public static function findById($id) {
        // Requête pour trouver un élève par ID
        // Retourne un objet EleveModel ou null si non trouvé
    }

    public function save() {
        // Sauvegarde un nouvel élève dans la base de données
        // Retourne true si succès, false sinon
    }

    public function update($data) {
        // Met à jour l'élève avec les nouvelles données
    }

    public static function deleteById($id) {
        // Supprime l'élève par ID
        // Retourne true si succès, false sinon
    }
}
