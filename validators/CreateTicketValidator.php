<?php namespace App\Modules\Tickets\Validators;

use Ill\Core\CommandBus\Exceptions\CommandValidationFailedException;
use Illuminate\Validation\Factory;
use App\Modules\Tickets\Cases\CreateTicketRequest;

class CreateTicketValidator
{
    private $validationFactory;

    public function __construct(Factory $validationFactory)
    {

        $this->validationFactory = $validationFactory;

    }

    public function validate(CreateTicketRequest $command)
    {

        $validator = $this->validationFactory->make(
            [
                'title' => $command->title,
                'active' => $command->active,
            ],
            [
                'title' => 'required',
                'active' => 'required',
            ]
        );

        if ($validator->fails()) {
            throw new CommandValidationFailedException($validator->messages()->toJson());
        }

    }
}
