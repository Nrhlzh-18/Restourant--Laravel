 <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
      
        return view('customer.index',compact('customers'));
    }
  
    public function create()
    {
        return view('customer.create');
    }
  
    public function store(Request $request)
    {
        $data_customer = $request->validate([
            'nameCustomer' => 'required',
            'emailCustomer' => 'required',
            'phoneCustomer' => 'required',
        ]);

        if ($request->member) {
            $data_customer['member'] = 1;
        } else {
            $data_customer['member'] = 0;
        }
      
        Customer::create($data_customer);
       
        return redirect()->route('customer.index')->with('success','Member created successfully.');
    }
  
    public function show(Customer $customer)
    {

    }
  
    public function edit(Customer $customer)
    {
        return view('customer.edit',compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $data_customer = $request->validate([
            'nameCustomer' => 'required',
            'emailCustomer' => 'required',
            'phoneCustomer' => 'required',
        ]);

        if ($request->member) {
            $data_customer['member'] = 1;
        } else {
            $data_customer['member'] = 0;
        }
      
        $customer->update($data_customer);
      
        return redirect()->route('customer.index')->with('success','Member updated successfully');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
       
        return redirect()->route('customer.index')->with('success','Member deleted successfully');
    }
}
