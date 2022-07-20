<?php

class Lesson_23_PagesController
{
	public function home()
	{
		require view('Lesson_12', 0);
	}
	public function about()
	{
		require view('about', 0);
	}
	public function about_culture()
	{
		require view('about-culture',  0);
	}
	public function contact()
	{
		require view('contact', 0);
	}
}