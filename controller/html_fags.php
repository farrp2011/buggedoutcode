<?php

/*
 * Copyright (C) 2018 Paul Farr
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 * Paul Farr would really like a well paying job as well. Email: farrp2011@live.com
 */
require_once 'Users.php';
require_once 'definitions.php';
define("HOME_PAGE","index.php");
define("ARCHIVE_PAGE","archive.php");
define("FUN_ARCHIVE","funstuff_archives.php");
define("CONTACT_PAGE","contact.php");
define("RESUME_PAGE","resume.php");

function getNav($actPage = null, $user)
{
	echo '<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="'.DOMAIN_NAME.HOME_PAGE.'">'.SITE_NAME.'</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Me</a>
					<div class="dropdown-menu" aria-labelledby="dropdown01">
						<a class="dropdown-item" href="'.DOMAIN_NAME.RESUME_PAGE.'">Resume</a>
						<a class="dropdown-item" href="'.DOMAIN_NAME.FUN_ARCHIVE.'">Fun Stuff</a>
						<a class="dropdown-item" href="'.DOMAIN_NAME.CONTACT_PAGE.'">Contact</a>
					</div>
				</li>
			<li class="nav-item">
            <a class="nav-link" href="'.DOMAIN_NAME.ARCHIVE_PAGE.'">Archives</a>
			</li>
			<li class="nav-item">
            <a class="nav-link" href="https://github.com/farrp2011" target="_blank">GitHub</a>
			</li>';
			if(isset($_COOKIE[COL_COOKIE]) && $user->isLoggedin($_COOKIE[COL_COOKIE]))
			{
				echo '<li><a class="nav-link" href="'.DOMAIN_NAME.'menu.php">menu</a></li><li><a class="nav-link" href="'.DOMAIN_NAME.'logout.php">logout</a></li>';
			}
		echo '</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
			<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search </button>
		</form>
      </div>
    </nav><br/><br/>';
}

function getfoot()
{
	echo('<!--footer time -->
		<footer class="bg-faded text-center py-5 bg-secondary text-white">
		<div class="container">
			<p class="m-0">&copy;Paul Farr 2018. All Rights Reserved.</p>
			<hr />
			<ul class="list-inline">
				<li class="list-inline-item"><a class="specLink rightBorder btn btn-dark" href="privacy.php">Privacy</a></li>
				<li class="list-inline-item"><a class="specLink rightBorder btn btn-dark" href="contact.php">Contact</a></li>
				<li class="list-inline-item"><a class="specLink btn btn-dark" href="https://www.linkedin.com/in/paul-farr-16a247153/" target="_blank">LinkedIn</a></li>
				<li class="list-inline-item"><a class="specLink rightBorder btn btn-dark" href="login.php">administration</a></li>
			</ul>
		</div>
	</footer>');
}
