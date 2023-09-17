<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMessageRequest;
use Illuminate\Http\Request;
use Statamic\Facades\Form;
class ContactMessageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ContactMessageRequest $request)
    {
        $data = $request->all();
        try {
            $form = Form::find('contact_us');
            $form->makeSubmission()->data($data)->save();
            return back()->with('success', 'A sua mensagem foi enviada com sucesso');
        } catch (\Throwable $th) {
            throw $th;
            return back()->with('error', 'Erro ao envia sua mensagem, Tente mais tarde!');
        }
    }
}
