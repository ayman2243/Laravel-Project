<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\Book;
use App\User;
use Validator;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $user = JWTAuth::toUser($request->token);

        return response()->json( $user->books );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $user = JWTAuth::toUser($request->token);

        $rules = array(
            'title'       => 'required',
            'description'      => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        } else {
            // store
            $book = new Book;
            $book->title = $request->input('title');
            $book->description = $request->input('description');
            $book->user_id = $user->id;
            $book->save();
            
            return  response()->json(['message'=>'Successfully created book!']);
        }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $user = JWTAuth::toUser($request->token);

        $rules = array(
            'title'       => 'required',
            'description'      => 'required'
        );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        } else {
            // update
            $book = $user->books()->find($id);

            if($book)
            {
                $book->title = $request->input('title');
                $book->description = $request->input('description');
                $book->save();
                
                return  response()->json(['message'=>'Successfully updated book!']);
            }
            else
            {
                return  response()->json(['message'=>'error!']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request, $id)
    {
        $user = JWTAuth::toUser($request->token);

        $book = $user->books()->find($id);

        if($book)
        {
            $book->delete();
            return  response()->json(['message'=>'Successfully Deleted book!']);
        }
        else
        {
            return  response()->json(['message'=>'error!']);
        }
    }


}
