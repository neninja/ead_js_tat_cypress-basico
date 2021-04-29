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

  it.only(`has "TICKETBOX" header's heading`, () => {
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
})
