<?php namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;

class DbTestController extends Controller
{
    public function index()
    {
        $db = Database::connect();

        try {
            $db->query("SELECT 1");
            echo "Database connection successful.";
        } catch (\Exception $e) {
            echo "Database connection failed: " . $e->getMessage();
        }
    }
}
