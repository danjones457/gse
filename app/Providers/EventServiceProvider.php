<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Illuminate\Auth\Events\Registered' => [
            'App\Listeners\LogRegisteredUser',
        ],

        'Illuminate\Auth\Events\Attempting' => [
            'App\Listeners\LogAuthenticationAttempt',
        ],

        'Illuminate\Auth\Events\Authenticated' => [
            'App\Listeners\LogAuthenticated',
        ],

        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\LogSuccessfulLogin',
        ],

        'Illuminate\Auth\Events\Failed' => [
            'App\Listeners\LogFailedLogin',
        ],

        'Illuminate\Auth\Events\Logout' => [
            'App\Listeners\LogSuccessfulLogout',
        ],

        'Illuminate\Auth\Events\Lockout' => [
            'App\Listeners\LogLockout',
        ],

        'Illuminate\Auth\Events\PasswordReset' => [
            'App\Listeners\LogPasswordReset',
        ],

        'App\Events\Auth\ConcurrentLogin' => [
            'App\Listeners\Auth\LogConcurrentLogin',
        ],

        'App\Events\Client\Creation' => [
            'App\Listeners\LogClientCreation',
        ],

        'App\Events\Client\Update' => [
            'App\Listeners\LogClientUpdate',
        ],

        'App\Events\Client\Deletion' => [
            'App\Listeners\LogClientDeletion',
        ],

        'App\Events\Client\NetWorthStatementGeneration' => [
            'App\Listeners\Client\LogNetWorthStatementGeneration'
        ],

        'App\Events\ClientData\SavingsPot\Creation' => [
            'App\Listeners\LogSavingsPotCreation',
        ],

        'App\Events\ClientData\SavingsPot\Update' => [
            'App\Listeners\LogSavingsPotUpdate',
        ],

        'App\Events\ClientData\SavingsPot\Deletion' => [
            'App\Listeners\LogSavingsPotDeletion',
        ],

        'App\Events\ClientData\IHTAsset\Creation' => [
            'App\Listeners\LogIHTAssetCreation',
        ],

        'App\Events\ClientData\IHTAsset\Update' => [
            'App\Listeners\LogIHTAssetUpdate',
        ],

        'App\Events\ClientData\IHTAsset\Deletion' => [
            'App\Listeners\LogIHTAssetDeletion',
        ],

        'App\Events\ClientData\IHTLiability\Creation' => [
            'App\Listeners\LogIHTLiabilityCreation',
        ],

        'App\Events\ClientData\IHTLiability\Update' => [
            'App\Listeners\LogIHTLiabilityUpdate',
        ],

        'App\Events\ClientData\IHTLiability\Deletion' => [
            'App\Listeners\LogIHTLiabilityDeletion',
        ],

        'App\Events\ClientData\Creation' => [
            'App\Listeners\LogIncomeCreation',
        ],

        'App\Events\ClientData\Update' => [
            'App\Listeners\LogIncomeUpdate',
        ],

        'App\Events\ClientData\Deletion' => [
            'App\Listeners\LogIncomeDeletion',
        ],

        'App\Events\Scenario\Creation' => [
            'App\Listeners\Scenario\LogCreation'
        ],

        'App\Events\Scenario\Cloned' => [
            'App\Listeners\Scenario\LogCloned'
        ],

        'App\Events\Scenario\Deletion' => [
            'App\Listeners\Scenario\LogDeletion'
        ],

        'App\Events\Scenario\Update' => [
            'App\Listeners\Scenario\LogUpdate'
        ],

        'App\Events\Scenario\Archive' => [
            'App\Listeners\Scenario\LogArchive'
        ],

        'App\Events\Scenario\Unarchive' => [
            'App\Listeners\Scenario\LogUnarchive'
        ],

        'App\Events\Scenario\Calculation' => [
            'App\Listeners\Scenario\LogCalculation'
        ],

        'App\Events\Scenario\PDFGeneration' => [
            'App\Listeners\Scenario\LogPDFGeneration'
        ],

        'App\Events\Scenario\WordGeneration' => [
            'App\Listeners\Scenario\LogWordGeneration'
        ],

        'App\Events\Scenario\Import' => [
            'App\Listeners\Scenario\LogImport'
        ],

        'App\Events\Group\Visit' => [
            'App\Listeners\Group\LogVisit'
        ],

        'App\Events\Group\GroupUserAdded' => [
            'App\Listeners\Group\LogAddition',
            'App\Listeners\Group\NotifySupportTeam',
            'App\Listeners\Group\NotifyNewUser',
            'App\Listeners\Group\NotifyGroupAdmin',
            'App\Listeners\Group\DirectDebitUpdateRequired',
        ],

        'App\Events\Group\GroupMismatchedDomain' => [
            'App\Listeners\Group\NotifySupportTeamMismatch'
        ],

        'App\Events\Group\PrivilegesUpdate' => [
            'App\Listeners\Group\LogPrivilegesUpdate'
        ],

        'App\Events\Network\Visit' => [
            'App\Listeners\Network\LogVisit'
        ],

        'App\Events\Network\NetworkUserAdded' => [
            'App\Listeners\Network\LogAddition',
            'App\Listeners\Network\NotifyNewUser',
            'App\Listeners\Network\NotifyNetworkAdmin',
        ],

        'App\Events\Locale\Update' => [
            'App\Listeners\Locale\LogUpdate'
        ],

        'App\Events\User\Verify' => [
            'App\Listeners\User\LogVerificationAttempt'
        ],

        'App\Events\ChartColours\Update' => [
            'App\Listeners\ChartColours\LogUpdate'
        ],

        'App\Events\Client\NoteCreation' => [
            'App\Listeners\Client\LogNoteCreation'
        ],

        'App\Events\Client\NoteUpdate' => [
            'App\Listeners\Client\LogNoteUpdate'
        ],

        'App\Events\Client\NoteDeletion' => [
            'App\Listeners\Client\LogNoteDeletion'
        ],

        'App\Events\DataCapture\Creation' => [
            'App\Listeners\DataCapture\LogCreation'
        ],

        'App\Events\DataCapture\Send' => [
            'App\Listeners\DataCapture\LogSent',
        ],

        'App\Events\DataCapture\Submission' => [
            'App\Listeners\DataCapture\LogSubmission'
        ],

        'App\Events\DataCapture\Preview' => [
            'App\Listeners\DataCapture\LogPreview'
        ],

        'App\Events\CashFlow\MarketSimCreation' => [
            'App\Listeners\CashFlow\LogMarketSimCreation'
        ],

        'App\Events\CashFlow\AnnuityCreation' => [
            'App\Listeners\CashFlow\LogAnnuityCreation'
        ],

        'App\Events\CashFlow\StatePensionCreation' => [
            'App\Listeners\CashFlow\LogStatePensionCreation'
        ],

        'App\Events\Contact\Submission' => [
            'App\Listeners\Contact\LogSubmission'
        ],

        'App\Events\Feedback\Submission' => [
            'App\Listeners\Feedback\LogSubmission'
        ],

        'App\Events\TV\Watched' => [
            'App\Listeners\TV\LogWatched'
        ],

        'App\Events\User\TermsAgreement' => [
            'App\Listeners\User\LogTermsAgreement',
        ],

        'App\Events\User\LinkClick' => [
            'App\Listeners\User\LogLinkClick',
        ],

        'App\Events\User\ModeChanged' => [
            'App\Listeners\User\LogModeChanged'
        ],

        'App\Events\User\CompanyNameUpdate' => [
            'App\Listeners\User\LogCompanyNameUpdate'
        ],

        'App\Events\User\PasswordUpdate' => [
            'App\Listeners\User\LogPasswordUpdate'
        ],

        'App\Events\User\DesktopNotificationUpdate' => [
            'App\Listeners\User\LogDesktopNotificationUpdate'
        ],

        'App\Events\User\CurrencyUpdate' => [
            'App\Listeners\User\LogCurrencyUpdate'
        ],

        'App\Events\User\AssumptionsUpdate' => [
            'App\Listeners\User\LogAssumptionsUpdate'
        ],

        'App\Events\User\CashFlowSettingsUpdate' => [
            'App\Listeners\User\LogCashFlowSettingsUpdate'
        ],

        'App\Events\User\CalculatorDataCreation' => [
            'App\Listeners\User\LogCalculatorDataCreation'
        ],

        'App\Events\User\CalculatorDataUpdate' => [
            'App\Listeners\User\LogCalculatorDataUpdate'
        ],

        'App\Events\User\CalculatorDataDeletion' => [
            'App\Listeners\User\LogCalculatorDataDeletion'
        ],

        'App\Events\Recruitment\Login' => [
            'App\Listeners\Recruitment\LogLogin'
        ],

        'App\Events\Recruitment\Submission' => [
            'App\Listeners\Recruitment\LogSubmission'
        ],

        'App\Events\Billing\UserUpgraded' => [
            'App\Listeners\Billing\LogUpgrade',
            'App\Listeners\Billing\LogPackageChange',
            'App\Listeners\User\EndPreviousTrials',
        ],

        'App\Events\Support\View' => [
            'App\Listeners\Support\LogView'
        ],

        'App\Events\Integrations\Update' => [
            'App\Listeners\Integrations\LogUpdate'
        ],

        'App\Events\Integrations\IOInstall' => [
            'App\Listeners\Integrations\LogIOInstall'
        ],

        'App\Events\Integrations\IOUninstall' => [
            'App\Listeners\Integrations\LogIOUninstall'
        ],

        'App\Events\Integrations\IORenewal' => [
            'App\Listeners\Integrations\LogIORenewal'
        ],

        'App\Events\API\Consent' => [
            'App\Listeners\API\LogConsent'
        ],

        'App\Events\Admin\UserUpdated' => [
            'App\Listeners\Admin\AddUserNote',
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
