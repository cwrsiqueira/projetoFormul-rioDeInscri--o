<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

        if ($request->hasFile('autimgarquivo')) {
            if ($request->file('autimgarquivo')->isValid()) {
                $file = $request->file('autimgarquivo')->store('public');
                $url = asset(Storage::url($file));
                $validated['autimgarquivo'] = $url;
            }
        }

        if ($request->hasFile('autpaisarquivo')) {
            if ($request->file('autpaisarquivo')->isValid()) {
                $file = $request->file('autpaisarquivo')->store('public');
                $url = asset(Storage::url($file));
                $validated['autpaisarquivo'] = $url;
            }
        }

        if ($request->hasFile('comppagto')) {
            if ($request->file('comppagto')->isValid()) {
                $file = $request->file('comppagto')->store('public');
                $url = asset(Storage::url($file));
                $validated['comppagto'] = $url;
            }
        }

        $subscription = new Subscription();
        $subscription->uname = $validated['uname'];
        $subscription->age = $validated['age'];
        $subscription->sexo = $validated['sexo'];
        $subscription->nucleo = $validated['nucleo'];
        $subscription->phone1 = $validated['phone1'];
        $subscription->phone2 = $validated['phone2'];
        $subscription->infosaude = $validated['infosaude'];
        $subscription->infonecessidades = $validated['infonecessidades'];
        $subscription->autimgarquivo = $validated['autimgarquivo'];
        $subscription->autpaisarquivo = $validated['autpaisarquivo'] ?? '';
        $subscription->comppagto = $validated['comppagto'];
        $subscription->hash = Hash::make($validated['uname'] . $validated['nucleo'] . $validated['phone1'] . time() . rand(0, 9999) . time());
        $subscription->status = 'novo';
        $subscription->obs = '';
        $subscription->save();

        return view('subscription_confirmation', ['subscription' => $subscription]);
    }
}