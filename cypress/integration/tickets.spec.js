describe('Tickets', () => {
  // beforeEach(() => cy.visit('https://ticket-box.s3.eu-central-1.amazonaws.com/index.html'))
  beforeEach(() => cy.visit('http://localhost:2222'))

  it('fills all the input fields', () => {
    const firstName = 'Walmyr'
    const lastName = 'Filho'
    cy.get('#first-name').type(firstName)
    cy.get('#last-name').type(lastName)
    cy.get('#email').type('abc@gmail.com')
    cy.get('#requests').type('Vegetarian')
    cy.get('#signature').type(`${firstName} ${lastName}`)
  })

  it.only('select two tickets', () => {
    cy.get('#ticket-quantity').select('2')
  })

  it(`has "TICKETBOX" header's heading`, () => {
  })
})
