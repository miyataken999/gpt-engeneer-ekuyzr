namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::orderBy('created_at', 'desc')->get();
        return response()->json(['teams' => $teams]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:teams',
        ]);
        $team = new Team();
        $team->name = $request->input('name');
        $team->save();
        return response()->json(['team' => $team]);
    }
}