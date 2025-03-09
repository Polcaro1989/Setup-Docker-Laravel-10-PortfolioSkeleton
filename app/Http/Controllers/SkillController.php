<?php
namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    // Exibir todos os registros e retornar para a view
    public function index()
    {
        // Buscar todas as habilidades do banco de dados
        $skills = Skill::all();

        // Passar as habilidades para a view 'day.index' (ou a view que você deseja)
        return view('day.index', compact('skills'));
    }

    // Outros métodos (store, show, update, destroy) podem permanecer os mesmos
    public function store(Request $request)
    {
        $request->validate([
            'skills' => 'required|string|max:255',
        ]);

        $skill = Skill::create([
            'skills' => $request->skills,
        ]);

        return response()->json($skill, 201);
    }

    public function show($id)
    {
        $skill = Skill::find($id);

        if (!$skill) {
            return response()->json(['message' => 'Skill not found'], 404);
        }

        return response()->json($skill);
    }

    public function update(Request $request, $id)
    {
        $skill = Skill::find($id);

        if (!$skill) {
            return response()->json(['message' => 'Skill not found'], 404);
        }

        $request->validate([
            'skills' => 'required|string|max:255',
        ]);

        $skill->update([
            'skills' => $request->skills,
        ]);

        return response()->json($skill);
    }

    public function destroy($id)
    {
        $skill = Skill::find($id);

        if (!$skill) {
            return response()->json(['message' => 'Skill not found'], 404);
        }

        $skill->delete();

        return response()->json(['message' => 'Skill deleted successfully']);
    }
}
