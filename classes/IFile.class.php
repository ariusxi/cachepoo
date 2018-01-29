<?php
	interface IFile{
		public function write($key, $value);
		public function read($key);
	}