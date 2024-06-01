<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 225)]
    private ?string $mobile = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $zip = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    private ?string $country = null;

    #[ORM\Column(nullable: true)]
    private ?int $totalbalance = null;

    #[ORM\Column(nullable: true)]
    private ?int $cryptobalance = null;

    #[ORM\Column(nullable: true)]
    private ?int $loanbalance = null;

    #[ORM\Column(nullable: true)]
    private ?int $totalincome = null;

    #[ORM\OneToMany(targetEntity: Transaction::class, mappedBy: 'user', orphanRemoval: true)]
    private Collection $transactions;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $btcaddress = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ethaddress = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $usdtaddress = null;

    #[ORM\Column(nullable: true)]
    private ?bool $status = null;

    #[ORM\Column]
    private ?int $pin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $middlename = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $state = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dob = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $occupation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $income = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ssn = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $accounttype = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $currency = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $idcard = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $accountnumber = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\OneToMany(targetEntity: Investment::class, mappedBy: 'user')]
    private Collection $investments;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $paypaladdress = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $token = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $visiblepassword = null;

    #[ORM\OneToMany(targetEntity: Card::class, mappedBy: 'user')]
    private Collection $cards;

    #[ORM\OneToMany(targetEntity: CardTransaction::class, mappedBy: 'user')]
    private Collection $cardTransactions;

    #[ORM\Column(nullable: true)]
    private ?int $cardactivationamount = null;

    public function __construct()
    {
        $this->transactions = new ArrayCollection();
        $this->investments = new ArrayCollection();
        $this->cards = new ArrayCollection();
        $this->cardTransactions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): static
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(string $zip): static
    {
        $this->zip = $zip;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): static
    {
        $this->country = $country;

        return $this;
    }

    public function getTotalbalance(): ?int
    {
        return $this->totalbalance;
    }

    public function setTotalbalance(?int $totalbalance): static
    {
        $this->totalbalance = $totalbalance;

        return $this;
    }

    public function getCryptobalance(): ?int
    {
        return $this->cryptobalance;
    }

    public function setCryptobalance(?int $cryptobalance): static
    {
        $this->cryptobalance = $cryptobalance;

        return $this;
    }

    public function getLoanbalance(): ?int
    {
        return $this->loanbalance;
    }

    public function setLoanbalance(?int $loanbalance): static
    {
        $this->loanbalance = $loanbalance;

        return $this;
    }

    public function getTotalincome(): ?int
    {
        return $this->totalincome;
    }

    public function setTotalincome(?int $totalincome): static
    {
        $this->totalincome = $totalincome;

        return $this;
    }

    /**
     * @return Collection<int, Transaction>
     */
    public function getTransactions(): Collection
    {
        return $this->transactions;
    }

    public function addTransaction(Transaction $transaction): static
    {
        if (!$this->transactions->contains($transaction)) {
            $this->transactions->add($transaction);
            $transaction->setUser($this);
        }

        return $this;
    }

    public function removeTransaction(Transaction $transaction): static
    {
        if ($this->transactions->removeElement($transaction)) {
            // set the owning side to null (unless already changed)
            if ($transaction->getUser() === $this) {
                $transaction->setUser(null);
            }
        }

        return $this;
    }

    public function getBtcaddress(): ?string
    {
        return $this->btcaddress;
    }

    public function setBtcaddress(?string $btcaddress): static
    {
        $this->btcaddress = $btcaddress;

        return $this;
    }

    public function getEthaddress(): ?string
    {
        return $this->ethaddress;
    }

    public function setEthaddress(?string $ethaddress): static
    {
        $this->ethaddress = $ethaddress;

        return $this;
    }

    public function getUsdtaddress(): ?string
    {
        return $this->usdtaddress;
    }

    public function setUsdtaddress(?string $usdtaddress): static
    {
        $this->usdtaddress = $usdtaddress;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(?bool $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getPin(): ?int
    {
        return $this->pin;
    }

    public function setPin(int $pin): static
    {
        $this->pin = $pin;

        return $this;
    }

    public function getMiddlename(): ?string
    {
        return $this->middlename;
    }

    public function setMiddlename(?string $middlename): static
    {
        $this->middlename = $middlename;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getDob(): ?string
    {
        return $this->dob;
    }

    public function setDob(?string $dob): static
    {
        $this->dob = $dob;

        return $this;
    }

    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    public function setOccupation(?string $occupation): static
    {
        $this->occupation = $occupation;

        return $this;
    }

    public function getIncome(): ?string
    {
        return $this->income;
    }

    public function setIncome(?string $income): static
    {
        $this->income = $income;

        return $this;
    }

    public function getSsn(): ?string
    {
        return $this->ssn;
    }

    public function setSsn(?string $ssn): static
    {
        $this->ssn = $ssn;

        return $this;
    }

    public function getAccounttype(): ?string
    {
        return $this->accounttype;
    }

    public function setAccounttype(?string $accounttype): static
    {
        $this->accounttype = $accounttype;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): static
    {
        $this->currency = $currency;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getIdcard(): ?string
    {
        return $this->idcard;
    }

    public function setIdcard(?string $idcard): static
    {
        $this->idcard = $idcard;

        return $this;
    }

    public function getAccountnumber(): ?string
    {
        return $this->accountnumber;
    }

    public function setAccountnumber(?string $accountnumber): static
    {
        $this->accountnumber = $accountnumber;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return Collection<int, Investment>
     */
    public function getInvestments(): Collection
    {
        return $this->investments;
    }

    public function addInvestment(Investment $investment): static
    {
        if (!$this->investments->contains($investment)) {
            $this->investments->add($investment);
            $investment->setUser($this);
        }

        return $this;
    }

    public function removeInvestment(Investment $investment): static
    {
        if ($this->investments->removeElement($investment)) {
            // set the owning side to null (unless already changed)
            if ($investment->getUser() === $this) {
                $investment->setUser(null);
            }
        }

        return $this;
    }

    public function getPaypaladdress(): ?string
    {
        return $this->paypaladdress;
    }

    public function setPaypaladdress(?string $paypaladdress): static
    {
        $this->paypaladdress = $paypaladdress;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(?string $token): static
    {
        $this->token = $token;

        return $this;
    }

    public function getVisiblepassword(): ?string
    {
        return $this->visiblepassword;
    }

    public function setVisiblepassword(?string $visiblepassword): static
    {
        $this->visiblepassword = $visiblepassword;

        return $this;
    }

    /**
     * @return Collection<int, Card>
     */
    public function getCards(): Collection
    {
        return $this->cards;
    }

    public function addCard(Card $card): static
    {
        if (!$this->cards->contains($card)) {
            $this->cards->add($card);
            $card->setUser($this);
        }

        return $this;
    }

    public function removeCard(Card $card): static
    {
        if ($this->cards->removeElement($card)) {
            // set the owning side to null (unless already changed)
            if ($card->getUser() === $this) {
                $card->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CardTransaction>
     */
    public function getCardTransactions(): Collection
    {
        return $this->cardTransactions;
    }

    public function addCardTransaction(CardTransaction $cardTransaction): static
    {
        if (!$this->cardTransactions->contains($cardTransaction)) {
            $this->cardTransactions->add($cardTransaction);
            $cardTransaction->setUser($this);
        }

        return $this;
    }

    public function removeCardTransaction(CardTransaction $cardTransaction): static
    {
        if ($this->cardTransactions->removeElement($cardTransaction)) {
            // set the owning side to null (unless already changed)
            if ($cardTransaction->getUser() === $this) {
                $cardTransaction->setUser(null);
            }
        }

        return $this;
    }

    public function getCardactivationamount(): ?int
    {
        return $this->cardactivationamount;
    }

    public function setCardactivationamount(?int $cardactivationamount): static
    {
        $this->cardactivationamount = $cardactivationamount;

        return $this;
    }
}
