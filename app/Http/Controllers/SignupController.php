<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup');
    }

    public function direito_imagem()
    {
        return view('direito-de-imagem');
    }

    public function autorizacao_pais()
    {
        return view('autorizacao-pais');
    }

    public function pagamento()
    {
        return view('pagamento');
    }

    public function registrar(Request $request)
    {
        $validated = $request->validate([
            "uname" => "required|min:3|string",
            "age" => "required|numeric",
            "sexo" => "",
            "nucleo" => "required|string|min:3",
            "phone1" => "required",
            "phone2" => "",
            "infosaude" => "",
            "infonecessidades" => "",
            "autimgarquivo" => "required|file|mimes:pdf",
            "autpaisarquivo" => "file|mimes:pdf",
            "comppagto" => "required|file|mimes:pdf"
        ], [
            'required' => 'O campo :attribute é obrigatório.',
            'min' => 'O campo :attribute deve ter pelo menos :min caracteres.',
            'string' => 'O campo :attribute deve ser um texto.',
            'numeric' => 'O campo :attribute precisa ser um número.',
            'file' => 'O campo :attribute precisa ser um arquivo.',
            'mimes' => 'O campo :attribute precisa ser um arquivo do tipo: :values.',
        ], [
            'uname' => 'Nome Completo',
            'age' => 'Idade',
            'nucleo' => 'Núcleo de Origem',
            'phone1' => 'Whatsapp Pessoal',
            'autimgarquivo' => 'Enviar a Autorização de Uso de Imagem',
            'autpaisarquivo' => 'Enviar a Autorização do responsável',
            'comppagto' => 'Enviar o Comprovante de pagamento',
        ]);



        dd('PASSOU', $validated);
    }
}