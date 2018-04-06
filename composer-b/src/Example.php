<?php

namespace KnowTheCode\ComposerPluginB;

use Symfony\Component\OptionsResolver\OptionsResolver;

class Example {
	protected $args;

	public function __construct( array $args = [] ) {
		$resolver = new OptionsResolver();
		$resolver->setDefaults( [
			'plugin'      => __NAMESPACE__,
			'description' => 'Plugin B with Composer Example for no-conflict autoload.',
		] );

		$this->args = $resolver->resolve( $args );
	}

	public function getArgs() {
		return $this->args;
	}
}
