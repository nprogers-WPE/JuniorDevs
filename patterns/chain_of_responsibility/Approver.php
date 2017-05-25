<?php

class ExpenseReport
{
    public $amount;
    public $reason;

    public function __construct()
    {
        $this->amount = $amount;
        $this->reason = $reason;
    }
}

class ExpenseApproval
{
    public $approvers = array();

    public function __construct($approvers = null)
    {
        if (is_null($approvers)) {
            $this->approvers = array(
                new MyManager(),
                new Jessica(),
                new Beth(),
                new JasonCohen()
            );
        }
    }

    public function getApproval(ExpenseReport $expenseReport)
    {
        foreach ($this->approvers as $approver) {
            if ($approver->approve($expenseReport)) {
                echo "Approved {$expenseReport->amount} for {$expenseReport->reason} by {$approver->name}";
                return true;
            }

            if ($approver->rejected) {
                echo "Rejected {$expenseReport->amount} for {$expenseReport->reason} by {$approver->name}";
                return false;
            }
        }

        echo "not approved";
        return false;
    }
}

interface Approver
{
    public function approve(ExpenseReport $expenseReport);
}

abstract class Manager implements Approver
{
    public $rejected;
    public $name;
    protected $maxApprovalAmount;
    protected $invalidReasons = array('beer');

    protected function ableToApprove($amount)
    {
        return $amount <= $this->maxApprovalAmount;
    }

    protected function approve(ExpenseReport $expenseReport)
    {
        return $this->ableToApprove($expenseReport->amount) && ! $this->reject($expenseReport);
    }

    protected function reject(ExpenseReport $expenseReport)
    {
        return $this->rejected = in_array($expenseReport->reason, $this->invalidReasons);
    }
}

class MyManager extends Manager implements Approver
{
    public function __construct()
    {
        $this->maxApprovalAmount = 100;
        $this->name = "Theresa Huth";
    }
}

class Jessica extends Manager implements Approver
{
    public function __construct()
    {
        $this->maxApprovalAmount = 500;
        $this->name = "Jessica Underbrink";
    }
}

class Beth extends Manager implements Approver
{
    public function __construct()
    {
        $this->maxApprovalAmount = 5000;
        $this->name = "Beth Weeks";
    }
}

class JasonCohen extends Manager implements Approver
{
    public function __construct()
    {
        $this->maxApprovalAmount = 50000;
        $this->name = "Jason Cohen";
    }
}

$er1 = new ExpenseReport(100, 'supplies');
$er2 = new ExpenseReport(100, 'beer');
$er3 = new ExpenseReport(10000, 'datacenter');

for (array($er1, $er2, $er3) as $expRept) {
    
}
