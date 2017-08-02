<?php

class MemberController extends BaseController
{
    
    public function destroy($id){
        \DB::table("data")->delete($id);
        return redirect()->back()->with('success','Member deleted');
    }
}