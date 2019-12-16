<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcessRrequest extends Controller
  {
    public function getAccess(Request $request, $id)    { 

      if($request->hasfile('docs'))
      {   
          foreach($request->file('docs') as $file)
          {
              $name = time().'.'.$file->extension();
              echo $name.'<br>';
          }
      }
      else{
        return 'false';
      }
      return back()->with('success', 'Data Your files has been successfully added');
    } 
  }
