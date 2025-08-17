<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;


class ContactController extends Controller
{   /**
     * Muestra la vista del formulario de contacto.
     */
    public function showForm()
    {
        return view('form');
    }

    /**
     * Procesa el formulario enviado.
     */
    public function submitForm(Request $request)
    {
        // Validación de los campos
        $validated = $request->validate([
            'nombre'   => 'required|string|max:255',
            'telefono' => 'required|nullable|string|max:20',
            'email'    => 'email|max:255',
            'mensaje'  => 'required|string|max:1000',
        ]);
        Contacto::create($validated);
        return back()->with('success', 'Gracias por contactarnos. Te responderemos pronto.');
    }
}
