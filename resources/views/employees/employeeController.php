use App\Models\Employee;
use Illuminate\Http\Request;

public function index() {
    $employees = Employee::all();
    return view('employees.index', compact('employees'));
}

public function create() {
    return view('employees.create');
}

public function store(Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:employees',
        'hire_date' => 'required|date',
        'position' => 'required|string|max:255',
    ]);

    Employee::create($request->all());
    return redirect()->route('employees.index');
}
