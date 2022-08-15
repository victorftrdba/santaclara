<?php

namespace App\Http\Controllers;

use App\Models\Unity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ExpenseRequest;
use App\Models\Expense;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::orderBy('updated_at', 'DESC')
            ->paginate(15);

        return view('expense.index', compact('expenses'));
    }

    public function create()
    {
        $unities = Unity::all();

        return view("expense.create", compact('unities'));
    }

    public function store(ExpenseRequest $request)
    {
        $data = $request->validated();

        Expense::create($data);

        return response()->redirectTo(route('expense.index'));
    }
}