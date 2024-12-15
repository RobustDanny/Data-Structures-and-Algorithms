# Data Structures and Algorithms PHP

Important notes during education:

1. Linear(proportional) complexity - loop must run 5 times since there are 5 values in the array

2. One operation in an algorithm can be understoor as something we do in each iteraction of the
   algorithm or for each piece of data, that takes constant time

3. The most immportant from bubble sort that we can notice in this simulation is that best and
   worst care is actually almost the same for selection sort O(n^2), but for bubble sort the best
   case runtime is only O(n)

4. Whether you use a Hash Set or a Hash Map depends on that you need just to know if something is
   there, or to find detailed info about it

5. Hash Set has constant time O(1) for: searching, adding, removing elements. IF all elements in
   unique bucket!

6. In worst case Hash Set has time complexity O(n) like an array, because elements with the same
   hash code should comtens in the same bucket. This bucket stays an array and array has time
   complaxity O(n). Same for Hash Map

7. Hash Map is something like Hash Set + associative array

8. Linked List benefits:
   nodes are stored in free space in memory
   do not have to be stored like in array, continuesly
   adding and removing nodes do not trigger shifting all others nodes in a LList

9. Before deleting a pointer, connect to next pointer to prev

10. We cannot sort LL with sorting algorithms like Counting sort, Radit sort or Quicksor, because
    they use indexes to modify array elements based on their position

11. Stacks can be implemented by using arrays or LL

12. Reasons to implement stacks using arrays:
    memory efficient. Array elements do not hold the next element addresses like LL do
    easier to implement and understand. Less code than LL
    Reasons do not use array:
    fixed size. If we need more elements it can't hold more

13. Reasons to use LL:
    dynamic size. Stack can grow dynamically
    Reasons do not use LL:
    extra memory. Stack element must contains adress to the next LL element
    readability. Code is more complex and longer

14. Queues can be implemented by using arr or LL

15. Reasons to use arr:
    memory efficient
    easier to implement and understand

16. Reasons do not use:
    fixed size
    some leanguages have build-in DS
    shifting cost. Dequeue causes the first element in queue to be removed. So, others
    should be shifted
17. Reasons to use LL:
    dynamic size
    no shifting

18. Reasons do not use LL:
    extra memory
    readability

19. Difference between SORTING algorithm and SEARCHING algorithm is that sorting algorithms
    MODIFY the array, however searching algorithms LEAVE the array UNCHANGED

20. Binary Search works on sorted arr only!

21. Linear Search TC is O(n). Binary Search TC is O(log(n))

22. Linear DS: arr, LL, Queues, Stacks

23. Graphs are non-linear DS, because gets value from different paths
