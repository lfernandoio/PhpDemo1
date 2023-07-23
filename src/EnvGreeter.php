<?php
namespace App;

class EnvGreeter extends Greeter {
	public function greetFromEnv(string $environmentVariableName):string {
		$name =$environmentVariableName //getenv($environmentVariableName);
		return $this->greet($name);
	}
}
