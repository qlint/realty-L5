<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function getIndex(){
		return view('pages.welcome');
	}

	public function getAboutus(){
		return view('pages.aboutus');
	}

	public function getAddproperty(){
		return view('pages.addproperty');
	}

	public function getAgentdetails(){
		return view('pages.agentdetails');
	}

	public function getAgent(){
		return view('pages.agent');
	}

	public function getArticleleftsidebar(){
		return view('pages.articleleftsidebar');
	}

	public function getArticle(){
		return view('pages.article');
	}

	public function getBlogrightsidebar(){
		return view('pages.blogrightsidebar');
	}

	public function getBlogsidebar(){
		return view('pages.blogsidebar');
	}

	public function getBlog(){
		return view('pages.blog');
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function getSingleproperties(){
		return view('pages.singleproperties');
	}

	public function getServices(){
		return view('pages.services');
	}

	public function getRegister(){
		return view('pages.register');
	}

	public function getProperties(){
		return view('pages.properties');
	}

	public function getPropertiesidebar(){
		return view('pages.propertiesidebar');
	}

	public function getPropertiesrightsidebar(){
		return view('pages.propertiesrightsidebar');
	}

	public function getPropertieslistsidebar(){
		return view('pages.propertieslistsidebar');
	}

	public function getPropertieslistrightsidebar(){
		return view('pages.propertieslistrightsidebar');
	}

	public function getMyaccount(){
		return view('pages.myaccount');
	}

	public function getLogin(){
		return view('pages.login');
	}

	public function getError(){
		return view('pages.error');
	}

}