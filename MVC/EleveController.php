<?php
class EleveController {
    
    public function getEleve($id) {
        // Récupère les détails d'un élève par son ID
        $eleve = EleveModel::findById($id);
        if ($eleve) {
            $this->sendResponse($eleve);
        } else {
            $this->sendResponse(['error' => 'Élève non trouvé'], 404);
        }
    }

    public function createEleve() {
        // Crée un nouvel élève
        $data = json_decode(file_get_contents('php://input'), true);
        $nouvelEleve = new EleveModel($data);
        if ($nouvelEleve->save()) {
            $this->sendResponse($nouvelEleve, 201);
        } else {
            $this->sendResponse(['error' => 'Erreur lors de la création'], 500);
        }
    }

    public function updateEleve($id) {
        // Met à jour les informations d'un élève existant
        $data = json_decode(file_get_contents('php://input'), true);
        $eleve = EleveModel::findById($id);
        if ($eleve) {
            $eleve->update($data);
            $this->sendResponse($eleve);
        } else {
            $this->sendResponse(['error' => 'Élève non trouvé'], 404);
        }
    }

    public function deleteEleve($id) {
        // Supprime un élève par son ID
        if (EleveModel::deleteById($id)) {
            $this->sendResponse(['message' => 'Élève supprimé'], 204);
        } else {
            $this->sendResponse(['error' => 'Élève non trouvé'], 404);
        }
    }

    private function sendResponse($data, $statusCode = 200) {
        http_response_code($statusCode);
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}
