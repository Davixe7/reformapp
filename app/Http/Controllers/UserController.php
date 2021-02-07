<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\User  $project
   * @return \Illuminate\Http\Response
   */
  public function edit()
  {  
    $account = auth()->user();
    return view('accounts.edit', ['account' => $account]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\User  $project
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
    $account = auth()->user();
    $account->update([
      'name' => $account->name,
      'password' => $request->password ?: $account->password
    ]);
    
    return redirect()->route('accounts.edit', ['project'=>$project])->with(['message'=>'Cuenta actualizada exitosamente']);
  }
  
  public function subscribe(){
    auth()->user()->subscriptions()->attach(1);
    return redirect()->route('memberships.index')->with(['message'=>'Cuenta actualizada exitosamente']);
  }
}
