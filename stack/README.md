# Stack
A **stack** is an Abstract Data Type (ADT), commonly used in most programming languages.
A real-world stack allows operations at one end only. For example, we can place or remove a card or plate from the top of the stack only.
### Basic Operations:
#### Push

The process of putting a new data element onto stack is known as a **Push** Operation.

There is a pointer generally known as **Top** which tracks the last inserted position or the top of the Stack. In every insertion and deletion in the Stack will update this Top as well.

To insert a new element to the Stack, first check if the stack is full (for fixed size Stack). If the stack is not full then insert the element at the top of the Stack and update the Top.
#### Pop

Accessing the content while removing it from the stack, is known as a **Pop** Operation.

In Pop operation, if the Stack is not empty then the last inserted element is removed and the Top points to the next element.
**Peek** − get the top data element of the Stack, without removing it.
- **isEmpty** − check if Stack is empty.

#### Complexity Analysis
- Insertion - O(1)
- Deletion - O(1)
- Access - O(n)
- Search - O(n)
