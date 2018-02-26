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
require_once './definitions.php';
define("HOME_PAGE","index.php");
define("ARCHIVE_PAGE","archive.php");


function getNav($actPage)
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
						<a class="dropdown-item" href="#">Resume</a>
						<a class="dropdown-item" href="#">Fun Stuff</a>
						<a class="dropdown-item" href="#">Contact</a>
					</div>
				</li>
          <li class="nav-item">
            <a class="nav-link" href="'.DOMAIN_NAME.ARCHIVE_PAGE.'">Archive</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/farrp2011" target="_blank">GitHub</a>
          </li>
				<!--<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
					<div class="dropdown-menu" aria-labelledby="dropdown01">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>-->
        </ul>
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
			<p class="m-0 ">&copy;Paul Farr 2018. All Rights Reserved.</p>
			<hr />
			<ul class="list-inline">
				<li class="list-inline-item"><a class="specLink rightBorder btn btn-dark" href="privacy.php">Privacy</a></li>
				<li class="list-inline-item"><a class="specLink rightBorder btn btn-dark" href="contact.php">Contact</a></li>
				<li class="list-inline-item"><a class="specLink btn btn-dark" href="cohort.php">Cohort Pages</a></li>
			</ul>
		</div>
	</footer>');
}