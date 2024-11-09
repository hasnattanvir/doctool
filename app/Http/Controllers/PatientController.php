<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use DataTables;

class PatientController extends Controller
{
    // create 
    public function create()
    {
    return view('dashboard.admins.patient.insert');
    }

    // -- this is for laravel defulat --
    public function index()
    {
        $patients = Patient::all(); // Fetch all patient data
        return view('dashboard.admins.patient.patients', compact('patients')); // Pass data to the view
    }

   // Get all patient data for DataTables
   public function getPatientsData()
    {
        $patients = Patient::whereNull('deleted_at') // Only get non-trashed patients
            ->select(['id', 'name', 'phone', 'email', 'type_of_disease', 'doctor_name', 'payment', 'due_payment']);
        
        return DataTables::of($patients)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                return '<a href="' . route('patients.show', $row->id) . '" class="btn btn-info btn-sm">View</a> 
                        <a href="' . route('patients.edit', $row->id) . '" class="btn btn-warning btn-sm">Edit</a> 
                       <a href="javascript:void(0)" data-id="' . $row->id . '" class="btn btn-danger btn-sm delete-patient">Delete</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }


    
   public function getData()
   {
       $patients = Patient::all(); // Get all patients or use pagination for larger datasets
   
       return datatables()->of($patients) // Use the datatables() helper for server-side rendering
           ->addColumn('action', function ($patient) {
               return '<button data-id="' . $patient->id . '" class="delete-patient btn btn-danger">Delete</button>';
           })
           ->make(true);
   }
   


    // Show patient details
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('dashboard.admins.patient.single', compact('patient'));
    }

   
    // Edit patient record
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('dashboard.admins.patient.update', compact('patient'));
    }

    // Update patient record
    public function update(Request $request, $id)
    {
        $patient = Patient::findOrFail($id);
        $patient->update($request->all());
        return redirect()->route('admin.patients.index')->with('success', 'Patient updated successfully');
    }

      // Soft delete (move to trash)
      public function trash($id)
    {
        $patient = Patient::findOrFail($id);
        $patient->delete();  // Soft delete
        return response()->json(['message' => 'Patient moved to trash successfully']);
    }

      // List of trashed patients
      public function trashIndex()
      {
          $trashedPatients = Patient::onlyTrashed()->get();
          return view('dashboard.admins.patient.trash', compact('trashedPatients'));
      }

    // Restore patient from trash
    public function restore($id)
    {
        $patient = Patient::onlyTrashed()->findOrFail($id);
        $patient->restore(); // Restore the soft-deleted patient
        return redirect()->route('admin.patients.index')->with('success', 'Patient restored successfully');
    }
    

    // Permanently delete patient
    public function forceDelete($id)
    {
        $patient = Patient::onlyTrashed()->findOrFail($id);
        $patient->forceDelete(); // Permanently delete the patient
        return redirect()->route('patients.trashIndex')->with('success', 'Patient permanently deleted');
    }


    // Print Invoice
    public function printInvoice($id)
    {
        $patient = Patient::findOrFail($id);
        return view('admin.patients.invoice', compact('patient'));
    }

     // Store a new patient record
     public function store(Request $request)
     {
         $validated = $request->validate([
             'name' => 'required|string|max:255',
             'phone' => 'required|string|max:15',
             'email' => 'nullable|email',
             'type_of_disease' => 'required|string',
             'payment' => 'required|numeric',
             'due_payment' => 'nullable|numeric',
             'total_payment' => 'required|numeric',
             'doctor_fee' => 'required|numeric',
             'case_details' => 'nullable|string',
             'image' => 'nullable|image',
             'gallery' => 'nullable|array',
             'next_schedule_date' => 'nullable|date',
             'doctor_name' => 'required|string',
         ]);
     
         if ($request->hasFile('image')) {
             $path = $request->file('image')->store('patients', 'public');
             $validated['image'] = $path;
         }
     
         if ($request->hasFile('gallery')) {
             $galleryPaths = [];
             foreach ($request->file('gallery') as $file) {
                 $galleryPaths[] = $file->store('patients/gallery', 'public');
             }
             $validated['gallery'] = $galleryPaths;
         }
     
         Patient::create($validated);
     
         return redirect()->route('patients.index')->with('success', 'Patient added successfully');
     }
     
 
     // Update due payment when the next payment is made
     public function updatePayment(Request $request, $id)
     {
         $patient = Patient::findOrFail($id);
         $newPayment = $request->input('payment');  // amount being paid now
 
         // Update due payment
         $patient->payment += $newPayment;
         $patient->due_payment -= $newPayment;
 
         if ($patient->due_payment <= 0) {
             $patient->due_payment = 0; // Complete payment
         }
 
         $patient->save();
 
         return response()->json(['message' => 'Payment updated successfully', 'data' => $patient]);
     }
}
