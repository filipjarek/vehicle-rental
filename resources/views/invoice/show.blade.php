<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-white leading-tight">
            <nav class="flex px-5 py-3 text-gray-700  rounded-lg bg-gray-50 dark:bg-gray-800 border border-gray-300  dark:border-gray-700" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>                           
                                {{ __('Dashboard') }}
                        </a>
                    </li>
                     <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                <a href="{{ route('invoice.index') }}" class="ml-1 text-sm font-medium text-gray-400 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">
                                {{ __('Invoice List') }}
                                </a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="ml-1 text-sm font-medium text-gray-900 md:ml-2 dark:text-gray-100">{{ __('Invoice Information') }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </h2>
    </x-slot>

        <div class="py-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
                <div class="bg-slate-400 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-slate-100 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 ">
            
    
  
    <div class=" dark:bg-slate-800 border border-gray-300  dark:border-gray-700 rounded-lg bg-slate-100 shadow-md px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
    <div class="p-2 -mx-3 md:flex  underline ">{{ __('Invoice Information') }}</div>

    <div class="-mx-3 md:flex mb-6 ">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0 ">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="number_invoice">
                    {{ __('Invoice Number') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="number_invoice"  type="text"  class="form-control" name="number_invoice" disabled value="{{ $invoice->number_invoice }}">
            </div>
        
            <div class="md:w-1/2 px-3 ">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="invoice_date">
                    {{ __('Date of issue') }}
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="invoice_date"  type="date"  class="form-control" name="invoice_date" disabled value="{{ $invoice->invoice_date }}">
            </div>

            <div class="md:w-1/2 px-3 ">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="transaction_id">
                    {{ __('Transaction ID') }} 
                    </label>
                    <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="transaction_id"  type="text"  class="form-control" name="transaction_id" disabled value="#{{ $invoice->transaction_id}}">
            </div>

            <div class="md:w-1/2 px-3 ">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="company_id">
                    {{ __('Company ID') }} 
                    </label>
                    <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="company_id"  type="text"  class="form-control" name="company_id" disabled value="#{{ $invoice->company_id }}">
            </div>

        
        </div>

        <div class="-mx-3 md:flex mb-6 ">
        <div class="md:w-1/2 px-3 ">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="service">
                    {{ __('Service') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="service"  type="text"  class="form-control" name="service" disabled value="{{ $invoice->service }}">
            </div>

        
            <div class="md:w-1/2 px-3 ">
               
        
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="VAT">
                    {{ __('VAT') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="VAT"  type="text"  class="form-control" name="VAT" disabled value="{{ $invoice->VAT }} %">
            </div>

            </div>

        <div class="p-2 -mx-3 md:flex  underline ">{{ __('Buyer Information') }}</div>
        <div class="-mx-3 md:flex mb-6 ">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 ">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="buyer">
            
                    {{ __('Buyer') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="buyer"  type="text"  class="form-control" name="buyer" disabled value="{{ $invoice->buyer}}">

                </div>
                
            <div class="md:w-1/2 px-3 ">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="NIP">
                    {{ __('NIP') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="NIP"  type="text"  class="form-control" name="NIP" disabled value="{{ $invoice->NIP }}">
            </div>

        
        </div>

        <div class="-mx-3 md:flex mb-6 ">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 ">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="address">
                    {{ __('Address') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="address"  type="text"  class="form-control" name="address" disabled value="{{ $invoice->address }}">
            </div>

            <div class="md:w-1/2 px-3 ">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="payment_method">
                    {{ __('Payment method') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="payment_method"  type="text"  class="form-control" name="payment_method" disabled value="{{ $invoice->payment_method }}">
            </div>
           
        </div>
        <div class="p-2 -mx-3 md:flex  underline ">{{ __('Company Information') }}</div>
        <div class="-mx-3 md:flex mb-6 ">
        <div class="md:w-1/2 px-3 ">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
                    {{ __('name') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="name"  type="text"  class="form-control" name="name" disabled value="{{ $invoice->company->name }}">
            </div>

        
            <div class="md:w-1/2 px-3 ">
               
        
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="NIP">
                    {{ __('NIP') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="NIP"  type="text"  class="form-control" name="NIP" disabled value="{{ $invoice->company->NIP }}">
            </div>

            </div>

            <div class="-mx-3 md:flex mb-6 ">
        <div class="md:w-1/2 px-3 ">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="phone">
                    {{ __('Phone') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="phone"  type="text"  class="form-control" name="phone" disabled value="{{ $invoice->company->phone }}">
            </div>

        
            <div class="md:w-1/2 px-3 ">
               
        
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="street">
                    {{ __('Street') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="street"  type="text"  class="form-control" name="street" disabled value="{{ $invoice->company->street }}">
            </div>

            </div>

            <div class="-mx-3 md:flex mb-6 ">
        <div class="md:w-1/2 px-3 ">
        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="zip_code">
                    {{ __('Zip Code') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="zip_code"  type="text"  class="form-control" name="zip_code" disabled value="{{ $invoice->company->zip_code }}">
            </div>

        
            <div class="md:w-1/2 px-3 ">
               
        
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="city">
                    {{ __('City') }} 
                </label>
                <input class="appearance-none block w-full bg-slate-200 dark:bg-gray-800 border border-gray-300  dark:border-gray-700 rounded-md font-semibold text-base dark:text-white tracking-widest"id="city"  type="text"  class="form-control" name="city" disabled value="{{ $invoice->company->city }}">
            </div>

            </div>


        
            </div>
    
    
   

        <div class="flex items-center justify-end px-4 py-3  text-right sm:px-6">    
            <a href="{{ route('invoice.index') }}">
                <button type="button" class=" shadow overflow-hidden inline-flex items-center px-4 py-3 bg-gray-300 dark:bg-gray-700 border border-transparent rounded-md font-semibold text-xs dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-200 hover:text-white dark:hover:text-black disabled:opacity-25 transition duration-700 ease-in-out">
                    {{ __('Close') }}
                </button>
            </a>

            <div class="flex items-center justify-end px-4 py-3  text-right sm:px-6">
            <a href="{{ route('invoice.generate', $invoice->id) }}">
                <button type="button" class=" shadow overflow-hidden inline-flex items-center px-4 py-3 bg-gray-300 dark:bg-gray-700 border border-transparent rounded-md font-semibold text-xs dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-gray-200 hover:text-white dark:hover:text-black disabled:opacity-25 transition duration-700 ease-in-out">
                    {{ __('INVOICE PDF') }}
                </button>
                    </a>
            </div>
        </div>
        
    </form>

        <div class="mt-0 text-2xl ">
            <div>
        

                </div>
            </div>
        </div>
    </div>
   
<footer class="text-center lg:text-center  text-gray-400 dark:text-gray-600">
    <div class="flex justify-center items-center lg:justify-between p-6 border-b border-gray-300 dark:border-gray-700">
        <span><strong>?? 2023 {{ __('Design by') }} - Filip Jarek</strong></span>   
    </div>
</footer> 
</x-app-layout>
