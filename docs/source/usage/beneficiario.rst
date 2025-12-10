.. _recipient:

Beneficiário
===========

To create a ``Beneficiário`` you need to create an instance of the ``Pessoa`` object.

.. NOTE::
    ``Beneficiário`` is the person issuing the charge.

.. code-block:: php

    $beneficiario = new \Brunopignatari\LaravelBoleto\Pessoa;
    $beneficiario->setDocumento('00.000.000/0000-00')
        ->setNome('Company co.')
        ->setCep('00000-000')
        ->setEndereco('Street name, 123')
        ->setBairro('district')
        ->setUf('UF')
        ->setCidade('City');

Or, Simply:

.. code-block:: php

    $beneficiario = new \Brunopignatari\LaravelBoleto\Pessoa([
        'documento' => '00.000.000/0000-00',
        'nome'      => 'Company co.',
        'cep'       => '00000-000',
        'endereco'  => 'Street name, 123',
        'bairro' => 'district',
        'uf'        => 'UF',
        'cidade'    => 'City',
    ]);


.. ATTENTION::
    The :ref:`bill` requires an instance of ``Beneficiário``.
