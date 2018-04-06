<?php

namespace KnowTheCode\ComposerPluginB;

use Symfony\Component\OptionsResolver\OptionsResolver;

class Example {
	protected $args;

	public function __construct( array $args = array() ) {
		$resolver = new OptionsResolver();
		$resolver->setDefaults( array(
			'plugin'      => __NAMESPACE__,
			'description' => 'Plugin A with Composer Example for no-conflict autoload.',
		) );

		$this->args = $resolver->resolve( $args );
	}

	public function getArgs() {
		return $this->args;
	}
}
