describe('Tickets', () => {
  beforeEach(() => cy.visit('https://ticket-box.s3.eu-central-1.amazonaws.com/index.html'))
  // beforeEach(() => cy.visit('http://localhost:2222'))

  it('fills all the input fields', () => {
    const firstName = 'Walmyr'
    const lastName = 'Filho'

    cy.get('#first-name').type(firstName)
    cy.get('#last-name').type(lastName)
    cy.get('#email').type('abc@gmail.com')
    cy.get('#requests').type('Vegetarian')
    cy.get('#signature').type(`${firstName} ${lastName}`)
  })

  it('select two tickets', () => {
    cy.get('#ticket-quantity').select('2')
  })

  it('select "vip" ticket type', () => {
    cy.get('#vip').check()
  })

  it('select "social media" checkbox', () => {
    cy.get('#social-media').check()
  })

  it('select "friend" and "publication", then uncheck "friend"', () => {
    cy.get('#friend').check()
    cy.get('#publication').check()
    cy.get('#friend').uncheck()
  })

  it(`has "TICKETBOX" header's heading`, () => {
    cy.get('header h1').should('contain', 'TICKETBOX')
  })

  it(`alerts on invalid email`, () => {
    cy.get('#email')
      .as("email")
      .type('abcgmail.com')

    cy.get('#email.invalid')
      .should('exist')

    cy.get('#email.invalid')
      .clear()
      .type('abc@gmail.com')

    cy.get('#email.invalid')
      .should('not.exist')
  })

  it.only('fills and reset the form', () => {
    const firstName = 'Walmyr'
    const lastName = 'Filho'
    const fullName = `${firstName} ${lastName}`

    cy.get('#first-name').type(firstName)
    cy.get('#last-name').type(lastName)
    cy.get('#email').type('abc@gmail.com')
    cy.get('#requests').type('Vegetarian')
    cy.get('#ticket-quantity').select('2')
    cy.get('#vip').check()
    cy.get('#friend').check()
    cy.get('#requests').type('Vegetarian')

    cy.get('.agreement p').should(
      'contain',
      `I, ${fullName}, wish to buy 2 VIP tickets.`
    )

    cy.get('#agree').check()
    cy.get('#signature').type(fullName)

    cy.get("button[type='submit']")
      .as('submitButton')
      .should("not.be.disabled")

    cy.get("button[type='reset']").click()

    cy.get('@submitButton').should('be.disabled')
  })
})
